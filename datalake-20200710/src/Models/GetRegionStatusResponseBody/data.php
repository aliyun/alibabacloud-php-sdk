<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\GetRegionStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example enabled
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDependencyReady;

    /**
     * @example True
     *
     * @var bool
     */
    public $isDlfServiceOpen;

    /**
     * @example cn_hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example READY
     *
     * @var string
     */
    public $regionStatus;
    protected $_name = [
        'accountStatus'     => 'AccountStatus',
        'isDependencyReady' => 'IsDependencyReady',
        'isDlfServiceOpen'  => 'IsDlfServiceOpen',
        'regionId'          => 'RegionId',
        'regionStatus'      => 'RegionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->isDependencyReady) {
            $res['IsDependencyReady'] = $this->isDependencyReady;
        }
        if (null !== $this->isDlfServiceOpen) {
            $res['IsDlfServiceOpen'] = $this->isDlfServiceOpen;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['IsDependencyReady'])) {
            $model->isDependencyReady = $map['IsDependencyReady'];
        }
        if (isset($map['IsDlfServiceOpen'])) {
            $model->isDlfServiceOpen = $map['IsDlfServiceOpen'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }

        return $model;
    }
}
