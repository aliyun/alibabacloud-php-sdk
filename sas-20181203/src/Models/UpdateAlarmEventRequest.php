<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlarmEventRequest extends Model
{
    /**
     * @description The IDs of the alert events.
     *
     * @var int[]
     */
    public $alarmEventIdList;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The operation that you want to perform on the alert events. Valid values:
     *
     *   **manual_handled**: handle the alert events.
     *   **ignore**: igore the alert events.
     *   **cancel_ignore**: remove the alert events from the whitelist.
     *
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
