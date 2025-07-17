<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class BlockAlarmNotificationRequest extends Model
{
    /**
     * @description The ID of the alert.
     *
     * For more information about how to obtain the ID of an alert, see [ListAlertEvents](https://help.aliyun.com/document_detail/2612346.html).
     *
     * This parameter is required.
     *
     * @example 133
     *
     * @var int
     */
    public $alarmId;

    /**
     * @description The ID of the alert handler.
     *
     * @example 2044049
     *
     * @var int
     */
    public $handlerId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of seconds that elapse before alert notifications are blocked. Unit: seconds.
     *
     * This parameter is required.
     *
     * @example 180
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alarmId' => 'AlarmId',
        'handlerId' => 'HandlerId',
        'regionId' => 'RegionId',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BlockAlarmNotificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
