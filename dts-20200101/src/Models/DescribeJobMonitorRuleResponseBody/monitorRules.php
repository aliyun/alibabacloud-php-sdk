<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleResponseBody;

use AlibabaCloud\Dara\Model;

class monitorRules extends Model
{
    /**
     * @var int
     */
    public $delayRuleTime;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobType;
    /**
     * @var int
     */
    public $noticeValue;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $times;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'delayRuleTime' => 'DelayRuleTime',
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'noticeValue'   => 'NoticeValue',
        'period'        => 'Period',
        'phone'         => 'Phone',
        'state'         => 'State',
        'times'         => 'Times',
        'type'          => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayRuleTime) {
            $res['DelayRuleTime'] = $this->delayRuleTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->noticeValue) {
            $res['NoticeValue'] = $this->noticeValue;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DelayRuleTime'])) {
            $model->delayRuleTime = $map['DelayRuleTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['NoticeValue'])) {
            $model->noticeValue = $map['NoticeValue'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
