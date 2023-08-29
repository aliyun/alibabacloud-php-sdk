<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LifecycleRule extends Model
{
    /**
     * @var int
     */
    public $archiveDays;

    /**
     * @var int
     */
    public $bindCount;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var int
     */
    public $coldArchiveDays;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $iaDays;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var Workflow
     */
    public $workflow;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var WorkflowInstance
     */
    public $workflowInstance;
    protected $_name = [
        'archiveDays'      => 'ArchiveDays',
        'bindCount'        => 'BindCount',
        'bizId'            => 'BizId',
        'catalogId'        => 'CatalogId',
        'coldArchiveDays'  => 'ColdArchiveDays',
        'config'           => 'Config',
        'description'      => 'Description',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'iaDays'           => 'IaDays',
        'name'             => 'Name',
        'resourceType'     => 'ResourceType',
        'ruleType'         => 'RuleType',
        'scheduleStatus'   => 'ScheduleStatus',
        'workflow'         => 'Workflow',
        'workflowId'       => 'WorkflowId',
        'workflowInstance' => 'WorkflowInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDays) {
            $res['ArchiveDays'] = $this->archiveDays;
        }
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->coldArchiveDays) {
            $res['ColdArchiveDays'] = $this->coldArchiveDays;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->iaDays) {
            $res['IaDays'] = $this->iaDays;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scheduleStatus) {
            $res['ScheduleStatus'] = $this->scheduleStatus;
        }
        if (null !== $this->workflow) {
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstance) {
            $res['WorkflowInstance'] = null !== $this->workflowInstance ? $this->workflowInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LifecycleRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveDays'])) {
            $model->archiveDays = $map['ArchiveDays'];
        }
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ColdArchiveDays'])) {
            $model->coldArchiveDays = $map['ColdArchiveDays'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IaDays'])) {
            $model->iaDays = $map['IaDays'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScheduleStatus'])) {
            $model->scheduleStatus = $map['ScheduleStatus'];
        }
        if (isset($map['Workflow'])) {
            $model->workflow = Workflow::fromMap($map['Workflow']);
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['WorkflowInstance'])) {
            $model->workflowInstance = WorkflowInstance::fromMap($map['WorkflowInstance']);
        }

        return $model;
    }
}
