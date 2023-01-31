<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class AssignJobsRequest extends Model
{
    /**
     * @example ["95187"]
     *
     * @var string[]
     */
    public $callingNumber;

    /**
     * @example 12f3dd08-0c55-44ce-9b64-e69d35ed3a76
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAsynchrony;

    /**
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $jobDataParsingTaskId;

    /**
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string[]
     */
    public $jobsJson;

    /**
     * @example json
     *
     * @var string
     */
    public $rosterType;

    /**
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber'        => 'CallingNumber',
        'instanceId'           => 'InstanceId',
        'isAsynchrony'         => 'IsAsynchrony',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
        'jobGroupId'           => 'JobGroupId',
        'jobsJson'             => 'JobsJson',
        'rosterType'           => 'RosterType',
        'strategyJson'         => 'StrategyJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAsynchrony) {
            $res['IsAsynchrony'] = $this->isAsynchrony;
        }
        if (null !== $this->jobDataParsingTaskId) {
            $res['JobDataParsingTaskId'] = $this->jobDataParsingTaskId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobsJson) {
            $res['JobsJson'] = $this->jobsJson;
        }
        if (null !== $this->rosterType) {
            $res['RosterType'] = $this->rosterType;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAsynchrony'])) {
            $model->isAsynchrony = $map['IsAsynchrony'];
        }
        if (isset($map['JobDataParsingTaskId'])) {
            $model->jobDataParsingTaskId = $map['JobDataParsingTaskId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobsJson'])) {
            if (!empty($map['JobsJson'])) {
                $model->jobsJson = $map['JobsJson'];
            }
        }
        if (isset($map['RosterType'])) {
            $model->rosterType = $map['RosterType'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }

        return $model;
    }
}
