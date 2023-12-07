<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageRequest extends Model
{
    /**
     * @description The user-defined content. The value can be up to 4,096 characters in length.
     *
     * >  If you set this parameter, the response includes this parameter and its value. You can add text such as an image description.
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @description The name of the Image Search instance. The name can be up to 20 characters in length.
     *
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The attribute, which is an integer. The attribute can be used to filter images when you search for images. If you set this parameter, the response includes this parameter and its value.
     *
     * @example 2
     *
     * @var int
     */
    public $intAttr;

    /**
     * @example 20
     *
     * @var int
     */
    public $intAttr2;

    /**
     * @description The name of the image. The name can be up to 512 characters in length.
     *
     * > *   An image is uniquely identified by the values of the ProductId and PicName parameters.
     * >*   If you add an image whose product ID (ProductId) and image name (PicName) are the same as those of an existing image, the newly added image overwrites the existing image.
     * @example namexxx.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @description The ID of the product. The ID can be up to 512 characters in length.
     *
     * >  A product may have multiple images.
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @description The attribute, which is a string. The value can be up to 128 characters in length. The attribute can be used to filter images. If you set this parameter, the response includes this parameter and its value.
     *
     * @example ss
     *
     * @var string
     */
    public $strAttr;

    /**
     * @example test
     *
     * @var string
     */
    public $strAttr2;
    protected $_name = [
        'customContent' => 'CustomContent',
        'instanceName'  => 'InstanceName',
        'intAttr'       => 'IntAttr',
        'intAttr2'      => 'IntAttr2',
        'picName'       => 'PicName',
        'productId'     => 'ProductId',
        'strAttr'       => 'StrAttr',
        'strAttr2'      => 'StrAttr2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
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
     * @return UpdateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
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
