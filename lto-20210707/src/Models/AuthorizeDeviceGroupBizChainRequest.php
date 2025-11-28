<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeDeviceGroupBizChainRequest extends Model
{
    /**
     * @var string
     */
    public $bizChainIdList;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bizChainIdList' => 'BizChainIdList',
        'deviceGroupId' => 'DeviceGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainIdList) {
            $res['BizChainIdList'] = $this->bizChainIdList;
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BizChainIdList'])) {
            $model->bizChainIdList = $map['BizChainIdList'];
        }

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
