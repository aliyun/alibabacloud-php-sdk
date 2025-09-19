<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlarmEventRequest extends Model
{
    /**
     * @var int[]
     */
    public $alarmEventIdList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $operationCode;
    protected $_name = [
        'alarmEventIdList' => 'AlarmEventIdList',
        'lang' => 'Lang',
        'operationCode' => 'OperationCode',
    ];

    public function validate()
    {
        if (\is_array($this->alarmEventIdList)) {
            Model::validateArray($this->alarmEventIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEventIdList) {
            if (\is_array($this->alarmEventIdList)) {
                $res['AlarmEventIdList'] = [];
                $n1 = 0;
                foreach ($this->alarmEventIdList as $item1) {
                    $res['AlarmEventIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
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
        if (isset($map['AlarmEventIdList'])) {
            if (!empty($map['AlarmEventIdList'])) {
                $model->alarmEventIdList = [];
                $n1 = 0;
                foreach ($map['AlarmEventIdList'] as $item1) {
                    $model->alarmEventIdList[$n1] = $item1;
                    ++$n1;
                }
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
