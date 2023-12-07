<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class AddImageRequest extends Model
{
    /**
     * @description The category of the image. For more information, see [Category reference](~~179184~~).
     *
     * > *   For product image search, if you specify a category for an image, the specified category prevails. If you do not specify a category for an image, the system predicts the category, and returns the prediction result in the response.
     * >*   For generic image search, only 88888888 may be returned for this parameter in the response regardless of whether a category is specified.
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description Specifies whether to identify the subject in the image and search for images based on the subject identification result. Default value: true. Valid values:
     *
     *   true: The system identifies the subject in the image, and searches for images based on the subject identification result. The subject identification result is included in the response.
     *   false: The system does not identify the subject in the image, and searches for images based on the entire image.
     *
     * @example true
     *
     * @var bool
     */
    public $crop;

    /**
     * @description The user-defined content. The value can be up to 4,096 characters in length.
     *
     * > If you specify this parameter, the response includes this parameter and its value. You can add text such as an image description.
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @description The name of the Image Search instance. The name can be up to 20 characters in length. If an Image Search instance is purchased, you can log on to the [Image Search console](https://imagesearch.console.aliyun.com/) to view the instance. If no Image Search instance is purchased, you must purchase an instance. For more information, see [Activate Image Search](~~179178~~) and [Create an instance](~~66569~~).
     *
     * > The instance name is not the instance ID.
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The attribute, which is an integer. The attribute can be used to filter images when you search for images. If you specify this parameter, the response includes this parameter and its value.
     *
     * @example 22
     *
     * @var int
     */
    public $intAttr;

    /**
     * @description The attribute, which is an integer. The attribute can be used to filter images when you search for images. If you specify this parameter, the response includes this parameter and its value.
     *
     * @example 22
     *
     * @var int
     */
    public $intAttr2;

    /**
     * @description The image file. The image file is encoded in Base64.
     *
     *   The file size of the image cannot exceed 4 MB.
     *   The following image formats are supported: PNG, JPG, JPEG, BMP, GIF, WebP, TIFF, and PPM.
     *   The transmission timeout period cannot exceed 5 seconds.
     *   For product and generic image searches, the length and width of the image must range from 100 pixels to 4,096 pixels.
     *   The image cannot contain rotation settings.
     *
     * > *   If you use SDKs to call this operation, you do not need to specify **PicContent**. The SDKs encapsulate this parameter and automatically encode its value in Base64. For more information about how to use Image Search SDK for Java, see [Java SDK](~~179188~~).
     * >*   If you use OpenAPI Explorer to call this operation, you can select only the **2019-03-25** version. If you call this operation of other versions, the value of **PicContent** cannot be encoded in Base64.
     * @example AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=
     *
     * @var string
     */
    public $picContent;

    /**
     * @description The name of the image. The name can be up to 512 characters in length.
     *
     * > *   An image is uniquely identified by the values of ProductId and PicName.
     * >*   If you add an image whose product ID (ProductId) and image name (PicName) are the same as those of an existing image, the newly added image overwrites the existing image.
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @description The ID of the product. The ID can be up to 512 characters in length.
     *
     * > A product may have multiple images.
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @description The subject area of the image, in the format of `x1,x2,y1,y2`. `x1 and y1` represent the position in the upper-left corner, in pixels. `x2 and y2` represent the position in the lower-right corner, in pixels.
     *
     * > *   If you specify Region, the system searches for images based on the value of Region regardless of the value of Crop.
     * >*   The value of Region does not have a unit. The value is generated based on the length and width of the image. If the length and width of the image are scaled, the value of Region must be proportionally adjusted.
     * @example 280,486,232,351
     *
     * @var string
     */
    public $region;

    /**
     * @description The attribute, which is a string. The value can be up to 128 characters in length. The attribute can be used to filter images when you search for images. If you specify this parameter, the response includes this parameter and its value.
     *
     * > The value cannot contain the following special characters: \ ¥ $ & %
     * @example ss
     *
     * @var string
     */
    public $strAttr;

    /**
     * @description The attribute, which is a string. The value can be up to 128 characters in length. The attribute can be used to filter images when you search for images. If you specify this parameter, the response includes this parameter and its value.
     *
     * > The value cannot contain the following special characters: \ ¥ $ & %
     * @example ss
     *
     * @var string
     */
    public $strAttr2;
    protected $_name = [
        'categoryId'    => 'CategoryId',
        'crop'          => 'Crop',
        'customContent' => 'CustomContent',
        'instanceName'  => 'InstanceName',
        'intAttr'       => 'IntAttr',
        'intAttr2'      => 'IntAttr2',
        'picContent'    => 'PicContent',
        'picName'       => 'PicName',
        'productId'     => 'ProductId',
        'region'        => 'Region',
        'strAttr'       => 'StrAttr',
        'strAttr2'      => 'StrAttr2',
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
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->intAttr2) {
            $res['IntAttr2'] = $this->intAttr2;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }
        if (null !== $this->strAttr2) {
            $res['StrAttr2'] = $this->strAttr2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageRequest
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
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['IntAttr2'])) {
            $model->intAttr2 = $map['IntAttr2'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }
        if (isset($map['StrAttr2'])) {
            $model->strAttr2 = $map['StrAttr2'];
        }

        return $model;
    }
}
