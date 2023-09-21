<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlarmEventRequest extends Model
{
    /**
     * @var int[]
     */
    public $alarmEventIdList;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example ignore
     *
     * @var string
     */
    public $operationCode;
    protected $_name = [
        'alarmEventIdList' => 'AlarmEventIdList',
        'lang'             => 'Lang',
        'operationCode'    => 'OperationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventIdList) {
            $res['AlarmEventIdList'] = $this->alarmEventIdList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlarmEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventIdList'])) {
            if (!empty($map['AlarmEventIdList'])) {
                $model->alarmEventIdList = $map['AlarmEventIdList'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        return $model;
    }
}
