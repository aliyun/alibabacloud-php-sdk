<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class ListRouteRuleRequest extends Model
{
    /**
     * @var string
     */
    public $bizChainName;

    /**
     * @var string
     */
    public $chainUpMode;

    /**
     * @var string
     */
    public $deviceGroupName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'bizChainName' => 'BizChainName',
        'chainUpMode' => 'ChainUpMode',
        'deviceGroupName' => 'DeviceGroupName',
        'num' => 'Num',
        'regionId' => 'RegionId',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainName) {
            $res['BizChainName'] = $this->bizChainName;
        }

        if (null !== $this->chainUpMode) {
            $res['ChainUpMode'] = $this->chainUpMode;
        }

        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BizChainName'])) {
            $model->bizChainName = $map['BizChainName'];
        }

        if (isset($map['ChainUpMode'])) {
            $model->chainUpMode = $map['ChainUpMode'];
        }

        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
