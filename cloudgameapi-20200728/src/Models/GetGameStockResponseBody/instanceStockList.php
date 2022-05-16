<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStockResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStockList extends Model
{
    /**
     * @var int
     */
    public $availableSlots;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $quotaSlots;

    /**
     * @var string
     */
    public $reginName;

    /**
     * @var int
     */
    public $usedSlots;

    /**
     * @var int
     */
    public $userLevel;
    protected $_name = [
        'availableSlots' => 'AvailableSlots',
        'instanceId'     => 'InstanceId',
        'quotaSlots'     => 'QuotaSlots',
        'reginName'      => 'ReginName',
        'usedSlots'      => 'UsedSlots',
        'userLevel'      => 'UserLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSlots) {
            $res['AvailableSlots'] = $this->availableSlots;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->quotaSlots) {
            $res['QuotaSlots'] = $this->quotaSlots;
        }
        if (null !== $this->reginName) {
            $res['ReginName'] = $this->reginName;
        }
        if (null !== $this->usedSlots) {
            $res['UsedSlots'] = $this->usedSlots;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStockList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSlots'])) {
            $model->availableSlots = $map['AvailableSlots'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QuotaSlots'])) {
            $model->quotaSlots = $map['QuotaSlots'];
        }
        if (isset($map['ReginName'])) {
            $model->reginName = $map['ReginName'];
        }
        if (isset($map['UsedSlots'])) {
            $model->usedSlots = $map['UsedSlots'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }

        return $model;
    }
}
