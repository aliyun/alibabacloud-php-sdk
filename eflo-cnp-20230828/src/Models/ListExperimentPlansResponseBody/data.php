<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlansResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Creation Time
     *
     * @example 2024-07-08 10:12:42
     *
     * @var string
     */
    public $createTime;

    /**
     * @description End Time
     *
     * @example 2024-07-08 10:22:42
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Plan ID
     *
     * @example 189
     *
     * @var int
     */
    public $planId;

    /**
     * @description Test Plan Execution Status
     *
     * @var int[]
     */
    public $planTaskStatus;

    /**
     * @description Resource Group ID
     *
     * @example rg-aek5behqmwbfhuy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Associated Resource Name
     *
     * @example q_ecs_xpec_postpay_c
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description Start Time
     *
     * @example 2024-07-08 10:12:42
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Associated Test Plan Template ID
     *
     * @example 6
     *
     * @var int
     */
    public $templateId;

    /**
     * @description Associated Test Plan Template Name
     *
     * @example test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Update Time
     *
     * @example 2024-07-08 10:12:42
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'endTime'         => 'EndTime',
        'planId'          => 'PlanId',
        'planTaskStatus'  => 'PlanTaskStatus',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceName'    => 'ResourceName',
        'startTime'       => 'StartTime',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planTaskStatus) {
            $res['PlanTaskStatus'] = $this->planTaskStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanTaskStatus'])) {
            $model->planTaskStatus = $map['PlanTaskStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
