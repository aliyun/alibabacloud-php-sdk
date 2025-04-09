<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CancelJobsRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string[]
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $jobReferenceId;

    /**
     * @var string
     */
    public $scenarioId;
    protected $_name = [
        'all' => 'All',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'jobReferenceId' => 'JobReferenceId',
        'scenarioId' => 'ScenarioId',
    ];

    public function validate()
    {
        if (\is_array($this->jobId)) {
            Model::validateArray($this->jobId);
        }
        if (\is_array($this->jobReferenceId)) {
            Model::validateArray($this->jobReferenceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobId) {
            if (\is_array($this->jobId)) {
                $res['JobId'] = [];
                $n1 = 0;
                foreach ($this->jobId as $item1) {
                    $res['JobId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->jobReferenceId) {
            if (\is_array($this->jobReferenceId)) {
                $res['JobReferenceId'] = [];
                $n1 = 0;
                foreach ($this->jobReferenceId as $item1) {
                    $res['JobReferenceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobId'])) {
            if (!empty($map['JobId'])) {
                $model->jobId = [];
                $n1 = 0;
                foreach ($map['JobId'] as $item1) {
                    $model->jobId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['JobReferenceId'])) {
            if (!empty($map['JobReferenceId'])) {
                $model->jobReferenceId = [];
                $n1 = 0;
                foreach ($map['JobReferenceId'] as $item1) {
                    $model->jobReferenceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        return $model;
    }
}
