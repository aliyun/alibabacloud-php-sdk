<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobsResponseBody;

use AlibabaCloud\Tea\Model;

class failoverTestJobList extends Model
{
    /**
     * @description The description of the failover test.
     *
     * The description must be 0 to 256 characters in length and cannot start with \\*\\*http:// **or** https://\\*\\*.
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the failover test. Unit: minutes. Valid values: **1 to 4320**.
     *
     * @example 60
     *
     * @var string
     */
    public $jobDuration;

    /**
     * @description The ID of the failover test.
     *
     * @example ftj-xxxxxxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Indicates whether the failover test is performed immediately. Valid values:
     *
     *   **StartNow**
     *   **StartLater**
     *
     * @example StartNow
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The name of the failover test.
     *
     * The name must be 0 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of the failover test resources.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the failover test resource. Only **PHYSICALCONNECTION** is returned.
     *
     * @example PHYSICALCONNECTION
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2023-11-21T14:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the failover test. Valid values:
     *
     *   **Init**
     *   **Starting**
     *   **Testing**
     *   **Stopping**
     *   **Stopped**
     *
     * @example Init
     *
     * @var string
     */
    public $status;

    /**
     * @example 2023-11-21T15:00:00Z
     *
     * @var string
     */
    public $stopTime;
    protected $_name = [
        'description'  => 'Description',
        'jobDuration'  => 'JobDuration',
        'jobId'        => 'JobId',
        'jobType'      => 'JobType',
        'name'         => 'Name',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'stopTime'     => 'StopTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobDuration) {
            $res['JobDuration'] = $this->jobDuration;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failoverTestJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobDuration'])) {
            $model->jobDuration = $map['JobDuration'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        return $model;
    }
}
