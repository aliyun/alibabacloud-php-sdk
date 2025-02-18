<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateImageFromAppInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appCenterImageName;
    /**
     * @var string
     */
    public $appInstanceGroupId;
    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'appCenterImageName' => 'AppCenterImageName',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'productType'        => 'ProductType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageName) {
            $res['AppCenterImageName'] = $this->appCenterImageName;
        }

        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCenterImageName'])) {
            $model->appCenterImageName = $map['AppCenterImageName'];
        }

        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
