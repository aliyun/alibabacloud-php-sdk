<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\targetList;

class alertConfig extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var escalationList
     */
    public $escalationList;

    /**
     * @var int
     */
    public $notifyType;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var targetList
     */
    public $targetList;

    /**
     * @var string
     */
    public $webHook;
    protected $_name = [
        'endTime' => 'EndTime',
        'escalationList' => 'EscalationList',
        'notifyType' => 'NotifyType',
        'silenceTime' => 'SilenceTime',
        'startTime' => 'StartTime',
        'targetList' => 'TargetList',
        'webHook' => 'WebHook',
    ];

    public function validate()
    {
        if (null !== $this->escalationList) {
            $this->escalationList->validate();
        }
        if (null !== $this->targetList) {
            $this->targetList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->escalationList) {
            $res['EscalationList'] = null !== $this->escalationList ? $this->escalationList->toArray($noStream) : $this->escalationList;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->targetList) {
            $res['TargetList'] = null !== $this->targetList ? $this->targetList->toArray($noStream) : $this->targetList;
        }

        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EscalationList'])) {
            $model->escalationList = escalationList::fromMap($map['EscalationList']);
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TargetList'])) {
            $model->targetList = targetList::fromMap($map['TargetList']);
        }

        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
