<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $runnableTimeFrom;

    /**
     * @var string
     */
    public $runnableTimeTo;

    /**
     * @var string
     */
    public $triggerPeriod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $day;

    /**
     * @var string[]
     */
    public $videoUrl;
    protected $_name = [
        'appId'            => 'AppId',
        'expireAt'         => 'ExpireAt',
        'groupName'        => 'GroupName',
        'ruleId'           => 'RuleId',
        'runnableTimeFrom' => 'RunnableTimeFrom',
        'runnableTimeTo'   => 'RunnableTimeTo',
        'triggerPeriod'    => 'TriggerPeriod',
        'clientToken'      => 'ClientToken',
        'day'              => 'Day',
        'videoUrl'         => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->runnableTimeFrom) {
            $res['RunnableTimeFrom'] = $this->runnableTimeFrom;
        }
        if (null !== $this->runnableTimeTo) {
            $res['RunnableTimeTo'] = $this->runnableTimeTo;
        }
        if (null !== $this->triggerPeriod) {
            $res['TriggerPeriod'] = $this->triggerPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RunnableTimeFrom'])) {
            $model->runnableTimeFrom = $map['RunnableTimeFrom'];
        }
        if (isset($map['RunnableTimeTo'])) {
            $model->runnableTimeTo = $map['RunnableTimeTo'];
        }
        if (isset($map['TriggerPeriod'])) {
            $model->triggerPeriod = $map['TriggerPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Day'])) {
            if (!empty($map['Day'])) {
                $model->day = $map['Day'];
            }
        }
        if (isset($map['VideoUrl'])) {
            if (!empty($map['VideoUrl'])) {
                $model->videoUrl = $map['VideoUrl'];
            }
        }

        return $model;
    }
}
