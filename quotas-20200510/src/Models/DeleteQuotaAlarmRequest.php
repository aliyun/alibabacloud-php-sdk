<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class DeleteQuotaAlarmRequest extends Model
{
    /**
     * @description The ID of the quota alert.
     *
     * @example 6b512ab7-da3a-4142-b529-2b2a9294****
     *
     * @var string
     */
    public $alarmId;
    protected $_name = [
        'alarmId' => 'AlarmId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQuotaAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }

        return $model;
    }
}
