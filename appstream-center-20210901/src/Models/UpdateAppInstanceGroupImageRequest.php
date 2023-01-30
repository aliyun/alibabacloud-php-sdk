<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppInstanceGroupImageRequest extends Model
{
    /**
     * @example img-8z4nztpaqvay4****
     *
     * @var string
     */
    public $appCenterImageId;

    /**
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $updateMode;
    protected $_name = [
        'appCenterImageId'   => 'AppCenterImageId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'bizRegionId'        => 'BizRegionId',
        'productType'        => 'ProductType',
        'updateMode'         => 'UpdateMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->updateMode) {
            $res['UpdateMode'] = $this->updateMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppInstanceGroupImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['UpdateMode'])) {
            $model->updateMode = $map['UpdateMode'];
        }

        return $model;
    }
}
