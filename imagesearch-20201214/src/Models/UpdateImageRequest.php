<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageRequest extends Model
{
    /**
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 2
     *
     * @var int
     */
    public $intAttr;

    /**
     * @var int
     */
    public $intAttr2;

    /**
     * @example namexxx.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @example ss
     *
     * @var string
     */
    public $strAttr;

    /**
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
