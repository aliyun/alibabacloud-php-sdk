<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class AssignJobsRequest extends Model
{
    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAsynchrony;

    /**
     * @var string
     */
    public $jobDataParsingTaskId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string[]
     */
    public $jobsJson;

    /**
     * @var string
     */
    public $rosterType;

    /**
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber' => 'CallingNumber',
        'instanceId' => 'InstanceId',
        'isAsynchrony' => 'IsAsynchrony',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
        'jobGroupId' => 'JobGroupId',
        'jobsJson' => 'JobsJson',
        'rosterType' => 'RosterType',
        'strategyJson' => 'StrategyJson',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumber)) {
            Model::validateArray($this->callingNumber);
        }
        if (\is_array($this->jobsJson)) {
            Model::validateArray($this->jobsJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumber) {
            if (\is_array($this->callingNumber)) {
                $res['CallingNumber'] = [];
                $n1 = 0;
                foreach ($this->callingNumber as $item1) {
                    $res['CallingNumber'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->jobsJson)) {
                $res['JobsJson'] = [];
                $n1 = 0;
                foreach ($this->jobsJson as $item1) {
                    $res['JobsJson'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rosterType) {
            $res['RosterType'] = $this->rosterType;
        }

        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
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
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = [];
                $n1 = 0;
                foreach ($map['CallingNumber'] as $item1) {
                    $model->callingNumber[$n1++] = $item1;
                }
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
                $model->jobsJson = [];
                $n1 = 0;
                foreach ($map['JobsJson'] as $item1) {
                    $model->jobsJson[$n1++] = $item1;
                }
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
