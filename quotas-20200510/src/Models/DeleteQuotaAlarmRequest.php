<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class DeleteQuotaAlarmRequest extends Model
{
    /**
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
