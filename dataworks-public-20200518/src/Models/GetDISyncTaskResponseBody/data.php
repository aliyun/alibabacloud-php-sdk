<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\solutionDetail;

class data extends Model
{
    /**
     * @var alarmList[]
     */
    public $alarmList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var solutionDetail
     */
    public $solutionDetail;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alarmList' => 'AlarmList',
        'code' => 'Code',
        'message' => 'Message',
        'solutionDetail' => 'SolutionDetail',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->alarmList)) {
            Model::validateArray($this->alarmList);
        }
        if (null !== $this->solutionDetail) {
            $this->solutionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmList) {
            if (\is_array($this->alarmList)) {
                $res['AlarmList'] = [];
                $n1 = 0;
                foreach ($this->alarmList as $item1) {
                    $res['AlarmList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->solutionDetail) {
            $res['SolutionDetail'] = null !== $this->solutionDetail ? $this->solutionDetail->toArray($noStream) : $this->solutionDetail;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AlarmList'])) {
            if (!empty($map['AlarmList'])) {
                $model->alarmList = [];
                $n1 = 0;
                foreach ($map['AlarmList'] as $item1) {
                    $model->alarmList[$n1++] = alarmList::fromMap($item1);
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['SolutionDetail'])) {
            $model->solutionDetail = solutionDetail::fromMap($map['SolutionDetail']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
