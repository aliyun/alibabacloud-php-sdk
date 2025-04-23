<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

class jobInfos extends Model
{
    /**
     * @var arrayProperties
     */
    public $arrayProperties;

    /**
     * @var containerGroups[]
     */
    public $containerGroups;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isArrayJob;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'arrayProperties' => 'ArrayProperties',
        'containerGroups' => 'ContainerGroups',
        'endTime' => 'EndTime',
        'isArrayJob' => 'IsArrayJob',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'lastModifyTime' => 'LastModifyTime',
        'priority' => 'Priority',
        'queue' => 'Queue',
        'startTime' => 'StartTime',
        'state' => 'State',
        'submitTime' => 'SubmitTime',
        'user' => 'User',
    ];

    public function validate()
    {
        if (null !== $this->arrayProperties) {
            $this->arrayProperties->validate();
        }
        if (\is_array($this->containerGroups)) {
            Model::validateArray($this->containerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayProperties) {
            $res['ArrayProperties'] = null !== $this->arrayProperties ? $this->arrayProperties->toArray($noStream) : $this->arrayProperties;
        }

        if (null !== $this->containerGroups) {
            if (\is_array($this->containerGroups)) {
                $res['ContainerGroups'] = [];
                $n1 = 0;
                foreach ($this->containerGroups as $item1) {
                    $res['ContainerGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->isArrayJob) {
            $res['IsArrayJob'] = $this->isArrayJob;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['ArrayProperties'])) {
            $model->arrayProperties = arrayProperties::fromMap($map['ArrayProperties']);
        }

        if (isset($map['ContainerGroups'])) {
            if (!empty($map['ContainerGroups'])) {
                $model->containerGroups = [];
                $n1 = 0;
                foreach ($map['ContainerGroups'] as $item1) {
                    $model->containerGroups[$n1++] = containerGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IsArrayJob'])) {
            $model->isArrayJob = $map['IsArrayJob'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
