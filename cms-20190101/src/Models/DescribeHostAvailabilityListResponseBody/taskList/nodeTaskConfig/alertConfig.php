<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList;
use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $notifyType;

    /**
     * @var escalationList
     */
    public $escalationList;

    /**
     * @var string
     */
    public $webHook;
    protected $_name = [
        'silenceTime'    => 'SilenceTime',
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'notifyType'     => 'NotifyType',
        'escalationList' => 'EscalationList',
        'webHook'        => 'WebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->escalationList) {
            $res['EscalationList'] = null !== $this->escalationList ? $this->escalationList->toMap() : null;
        }
        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['EscalationList'])) {
            $model->escalationList = escalationList::fromMap($map['EscalationList']);
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
