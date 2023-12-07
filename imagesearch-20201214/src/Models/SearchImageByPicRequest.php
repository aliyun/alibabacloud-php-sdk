<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByPicRequest extends Model
{
    /**
     * @description The category of the product. For more information, see [Category references](~~179184~~).
     *
     *   For product search: If a category is specified, the specified category prevails. If no category is specified, the system estimates and selects a category. The category selected by the system is included in the response.
     *   For generic search: The parameter value is set to 88888888 regardless of whether a category is specified.
     *
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description Specifies whether to recognize the subject in the image and search for images based on the recognized subject. Valid values: true and false. Default value: true.
     *
     *   true: The system recognizes the subject in the image, and searches for images based on the recognized subject. The recognition result is included in the response.
     *   false: The system does not recognize the subject of the image, and searches for images based on the entire image.
     *
     * @example true
     *
     * @var bool
     */
    public $crop;

    /**
     * @description The filter conditions. int_attr supports the following operators: >, >=, <, <=, and =. str_attr supports the following operators: = and !=. You can set the logical operator between conditions to AND or OR.
     *
     * Examples:
     *
     *   int_attr>=100
     *   str_attr!="value1"
     *   Example: int_attr=1000 AND str_attr="value1"
     *
     * @example int_attr=1000 AND str_attr="value1"
     *
     * @var string
     */
    public $filter;

    /**
     * @description The name of the Image Search instance. The name can be up to 20 characters in length.
     *
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of images to return on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $num;

    /**
     * @description The image file. The image file is encoded in Base64.
     *
     *   The file size of the image cannot exceed 4 MB.
     *   The following image formats are supported: PNG, JPG, JPEG, BMP, GIF, WebP, TIFF, and PPM.
     *   The transmission timeout period cannot exceed 5 seconds.
     *   For brand image searches, the length and the width of the image must range from 200 pixels to 4,096 pixels.
     *   For cloth image searches, the length and the width of the image must range from 448 pixels to 4,096 pixels.
     *   For product and generic image searches, the length and the width of the image must range from 100 pixels to 4,096 pixels.
     *   The image cannot contain rotation settings.
     *
     * @example AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=
     *
     * @var string
     */
    public $picContent;

    /**
     * @description The subject area of the image. Specify the subject area in the following format: `x1,x2,y1,y2`. `x1 and y1` represent the upper-left corner pixel. `x2 and y2` represent the lower-right corner pixel.
     *
     * >*   If you set the Region parameter, the system searches for images based on the value of Region regardless of the value of the Crop parameter.
     * @example 280,486,232,351
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of the image to return. Valid values: 0 to 499. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'crop'         => 'Crop',
        'filter'       => 'Filter',
        'instanceName' => 'InstanceName',
        'num'          => 'Num',
        'picContent'   => 'PicContent',
        'region'       => 'Region',
        'start'        => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
