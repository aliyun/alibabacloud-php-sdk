<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListEdgeDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $lastOnchainTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $usedOnchainCount;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'lastOnchainTime' => 'LastOnchainTime',
        'name' => 'Name',
        'status' => 'Status',
        'usedOnchainCount' => 'UsedOnchainCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->lastOnchainTime) {
            $res['LastOnchainTime'] = $this->lastOnchainTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usedOnchainCount) {
            $res['UsedOnchainCount'] = $this->usedOnchainCount;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['LastOnchainTime'])) {
            $model->lastOnchainTime = $map['LastOnchainTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UsedOnchainCount'])) {
            $model->usedOnchainCount = $map['UsedOnchainCount'];
        }

        return $model;
    }
}
