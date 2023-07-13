<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;
use AlibabaCloud\Tea\Model;

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
     * @example 1662016121
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var string
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isArrayJob;

    /**
     * @example 1663831441000
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @example testjob
     *
     * @var string
     */
    public $name;

    /**
     * @example testuser
     *
     * @var string
     */
    public $owner;

    /**
     * @example 9
     *
     * @var int
     */
    public $priority;

    /**
     * @example comp
     *
     * @var string
     */
    public $queue;

    /**
     * @example 1647427667
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example 1647423718
     *
     * @var int
     */
    public $submitTime;
    protected $_name = [
        'arrayProperties' => 'ArrayProperties',
        'containerGroups' => 'ContainerGroups',
        'endTime'         => 'EndTime',
        'id'              => 'Id',
        'isArrayJob'      => 'IsArrayJob',
        'lastModifyTime'  => 'LastModifyTime',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'priority'        => 'Priority',
        'queue'           => 'Queue',
        'startTime'       => 'StartTime',
        'state'           => 'State',
        'submitTime'      => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayProperties) {
            $res['ArrayProperties'] = null !== $this->arrayProperties ? $this->arrayProperties->toMap() : null;
        }
        if (null !== $this->containerGroups) {
            $res['ContainerGroups'] = [];
            if (null !== $this->containerGroups && \is_array($this->containerGroups)) {
                $n = 0;
                foreach ($this->containerGroups as $item) {
                    $res['ContainerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isArrayJob) {
            $res['IsArrayJob'] = $this->isArrayJob;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayProperties'])) {
            $model->arrayProperties = arrayProperties::fromMap($map['ArrayProperties']);
        }
        if (isset($map['ContainerGroups'])) {
            if (!empty($map['ContainerGroups'])) {
                $model->containerGroups = [];
                $n                      = 0;
                foreach ($map['ContainerGroups'] as $item) {
                    $model->containerGroups[$n++] = null !== $item ? containerGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsArrayJob'])) {
            $model->isArrayJob = $map['IsArrayJob'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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

        return $model;
    }
}
