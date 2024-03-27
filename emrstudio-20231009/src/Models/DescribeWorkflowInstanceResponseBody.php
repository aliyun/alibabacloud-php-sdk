<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class DescribeWorkflowInstanceResponseBody extends Model
{
    /**
     * @example c-047fa6bbe732e12d
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @example 2023-06-02 10:30:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example false
     *
     * @var bool
     */
    public $isComplementData;

    /**
     * @example workflow_instance_name
     *
     * @var string
     */
    public $name;

    /**
     * @example B897B94B-6754-5D09-AB8C-2E8186CCADC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example wg-acfmv4opbsduvfy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2
     *
     * @var int
     */
    public $runTimes;

    /**
     * @example 2024-01-01 10:59:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2024-02-04 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $state;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 1231311
     *
     * @var int
     */
    public $workflowId;

    /**
     * @example 2
     *
     * @var int
     */
    public $workflowVersion;
    protected $_name = [
        'emrClusterId'     => 'emrClusterId',
        'endDate'          => 'endDate',
        'isComplementData' => 'isComplementData',
        'name'             => 'name',
        'requestId'        => 'requestId',
        'resourceGroupId'  => 'resourceGroupId',
        'runTimes'         => 'runTimes',
        'scheduleTime'     => 'scheduleTime',
        'startDate'        => 'startDate',
        'state'            => 'state',
        'timeout'          => 'timeout',
        'workflowId'       => 'workflowId',
        'workflowVersion'  => 'workflowVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrClusterId) {
            $res['emrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->isComplementData) {
            $res['isComplementData'] = $this->isComplementData;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runTimes) {
            $res['runTimes'] = $this->runTimes;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowVersion) {
            $res['workflowVersion'] = $this->workflowVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['emrClusterId'])) {
            $model->emrClusterId = $map['emrClusterId'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['isComplementData'])) {
            $model->isComplementData = $map['isComplementData'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['runTimes'])) {
            $model->runTimes = $map['runTimes'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }
        if (isset($map['workflowVersion'])) {
            $model->workflowVersion = $map['workflowVersion'];
        }

        return $model;
    }
}
