<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupRequest\videoInfo;
use AlibabaCloud\Tea\Model;

class CreateTaskGroupRequest extends Model
{
    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @example 3
     *
     * @var int[]
     */
    public $day;

    /**
     * @example 2020-10-10
     *
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 17:00
     *
     * @var string
     */
    public $runnableTimeFrom;

    /**
     * @example 18:00
     *
     * @var string
     */
    public $runnableTimeTo;

    /**
     * @example immediately
     *
     * @var string
     */
    public $triggerPeriod;

    /**
     * @var videoInfo[]
     */
    public $videoInfo;
    protected $_name = [
        'appId'            => 'AppId',
        'clientToken'      => 'ClientToken',
        'day'              => 'Day',
        'expireAt'         => 'ExpireAt',
        'groupName'        => 'GroupName',
        'ruleId'           => 'RuleId',
        'runnableTimeFrom' => 'RunnableTimeFrom',
        'runnableTimeTo'   => 'RunnableTimeTo',
        'triggerPeriod'    => 'TriggerPeriod',
        'videoInfo'        => 'VideoInfo',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
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
        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = [];
            if (null !== $this->videoInfo && \is_array($this->videoInfo)) {
                $n = 0;
                foreach ($this->videoInfo as $item) {
                    $res['VideoInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Day'])) {
            if (!empty($map['Day'])) {
                $model->day = $map['Day'];
            }
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
        if (isset($map['VideoInfo'])) {
            if (!empty($map['VideoInfo'])) {
                $model->videoInfo = [];
                $n                = 0;
                foreach ($map['VideoInfo'] as $item) {
                    $model->videoInfo[$n++] = null !== $item ? videoInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
