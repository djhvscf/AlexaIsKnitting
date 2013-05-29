// JavaScript Document

    /* Declare Global Variables */
    var FULLSIZE_PATH = "";
    var DEFAULT_WIDTH = 450;
    var DEFAULT_HEIGHT = 600;
    var DEFAULT_CAPTION = "";
    var DEFAULT_WINDOW_NAME = "enlg_viewer";
    var DEFAULT_WINDOW_PATH = "imgpopup.html";
    /*
        Function Name: open_fullsize
        This is the function called on from the onClick handler placed on the thumbnail images.
        Newer browsers will allow this handler to be on the actual image tag itself, but older
        browsers will not recognize this. It would be best to place it in an anchor that is
        wrapped around the thumbnail's image tag.
        The function requires three arguments, the path to the popup, which if left blank will use
        the default path set as a global variable. This can be used if you want to have more than
        once file displaying images. The second argument is the path to the image to the full sized
        image and the third is the image's caption. If the caption is left blank, it will default to
        the caption value set in as a global.
        Only the path to the enlarged image is required.
    */
    function open_fullsize(page_url,img_path,img_caption){
        window_name = DEFAULT_WINDOW_NAME;
        FULLSIZE_PATH = img_path;
        if(img_caption == 'undefined' || !img_caption){ fullsize_caption = DEFAULT_CAPTION; }
        else{ fullsize_caption = img_caption; }
        if(FULLSIZE_PATH == 'undefined' || !FULLSIZE_PATH){ FULLSIZE_PATH = DEFAULT_WINDOW_PATH; }
        wref = window.open(page_url,window_name,'width='+DEFAULT_WIDTH+',height='+DEFAULT_HEIGHT);
        if(!wref.opener){ wref.opener = this.window; }
        return false;
    }
    /*
        Function Name: do_resize
        This function is called from the popup window. It does the actual work of resizing the
        popup window based on the height and width, plus some buffer values. This function takes
        no arguments and requires the function get_photo_data.
        This function is called from the onLoad event handler in the popup window that will display
        the enlarged version of the photo.
    */
    function do_resize(){
        WMOD = 50;
        HMOD = 100;
        image_width = get_photo_data("photo","width");
        image_height = get_photo_data("photo","height");
        if(!(!image_width || !image_height)){
            window.resizeTo(image_width+WMOD,image_height+HMOD);
        }
        self.focus();
    }
    /*
        Function Name: get_photo_data
        This function uses the getElementById object to determine the value of the height and width
        of an elememt. If the browser cannot use this object, the function returns false, otherwise
        it returns either the height or width of the elememt.
        The function takes two arguments. "element" is the ID of the HTML element, which MUST be in
        the HTML for this to work and "attribute" is the HTML attribute to look for. This function is
        designed only to look for height and width, in lowercase, and any other attribute value will result
        in the function returning false.
    */
    function get_photo_data(element,attribute){
        if(document.getElementById){
            photo_obj = eval('document.getElementById(element)');
            if(attribute == "width"){ return photo_obj.width; }
            else if(attribute == "height"){ return photo_obj.height; }
        }
        return false;
    }
