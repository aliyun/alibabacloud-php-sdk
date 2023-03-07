<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResellerUserAlarmThresholdRequest extends Model
{
    /**
     * @example quota_low_balance
     *
     * @var string
     */
    public $alarmType;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'alarmType' => 'AlarmType',
        'ownerId'   => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryResellerUserAlarmThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
