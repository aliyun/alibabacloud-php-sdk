<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateRouteStrategyRequest extends Model
{
    /**
     * @description The ID of the application group. You can obtain the ID on the **Application Management** page in the SchedulerX console.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The job ID. You can obtain the ID on the **Task Management** page in the SchedulerX console.
     *
     * @example 54978
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The name of the routing policy.
     *
     * @example test-strategy
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the **Namespace** page in the SchedulerX console.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable the routing policy. Valid values:
     *
     *   **0**: disables the routing policy.
     *   **1**: enables the routing policy.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The details of the routing policy. The value is a JSON string. For more information about this parameter, see **the additional information about request parameters** below this table.
     *
     * @example [{"percentage":20,"target":"[\"version1\"]","targetType":"label"}]
     *
     * @var string
     */
    public $strategyContent;

    /**
     * @description The type of the routing policy. Valid value:
     *
     *   **3**: routes by proportion.
     *
     * @example 3
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'groupId'         => 'GroupId',
        'jobId'           => 'JobId',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'strategyContent' => 'StrategyContent',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyContent) {
            $res['StrategyContent'] = $this->strategyContent;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyContent'])) {
            $model->strategyContent = $map['StrategyContent'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
