<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $crop;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'categoryId'       => 'CategoryId',
        'crop'             => 'Crop',
        'customContent'    => 'CustomContent',
        'instanceName'     => 'InstanceName',
        'intAttr'          => 'IntAttr',
        'picName'          => 'PicName',
        'productId'        => 'ProductId',
        'region'           => 'Region',
        'strAttr'          => 'StrAttr',
    ];

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picContentObject) {
            $res['PicContentObject'] = $this->picContentObject;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
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

        return $model;
    }
}
