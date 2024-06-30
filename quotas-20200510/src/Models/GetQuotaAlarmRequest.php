<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaAlarmRequest extends Model
{
    /**
     * @description The ID of the quota alert.
     *
     * For more information about how to query the ID of a quota alert, see [ListQuotaAlarms](https://help.aliyun.com/document_detail/184348.html).
     * @example 78d7e436-4b25-4897-84b5-d7b656bb****
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
     * @return GetQuotaAlarmRequest
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
