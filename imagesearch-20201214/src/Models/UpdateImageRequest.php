<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageRequest extends Model
{
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
    public $strAttr;
    protected $_name = [
        'customContent' => 'CustomContent',
        'instanceName'  => 'InstanceName',
        'intAttr'       => 'IntAttr',
        'picName'       => 'PicName',
        'productId'     => 'ProductId',
        'strAttr'       => 'StrAttr',
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
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
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
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
