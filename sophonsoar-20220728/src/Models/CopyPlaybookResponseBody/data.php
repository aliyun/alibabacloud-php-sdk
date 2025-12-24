<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $failNum;

    /**
     * @var float
     */
    public $failRate;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $historyMd5;

    /**
     * @var string
     */
    public $inputParams;

    /**
     * @var int
     */
    public $lastRuntime;

    /**
     * @var string
     */
    public $logicReleaseTaskflowMd5;

    /**
     * @var string
     */
    public $outputParams;

    /**
     * @var string
     */
    public $ownType;

    /**
     * @var int
     */
    public $permission;

    /**
     * @var int
     */
    public $playbookStatus;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var int
     */
    public $succNum;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'active' => 'Active',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'failNum' => 'FailNum',
        'failRate' => 'FailRate',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'historyMd5' => 'HistoryMd5',
        'inputParams' => 'InputParams',
        'lastRuntime' => 'LastRuntime',
        'logicReleaseTaskflowMd5' => 'LogicReleaseTaskflowMd5',
        'outputParams' => 'OutputParams',
        'ownType' => 'OwnType',
        'permission' => 'Permission',
        'playbookStatus' => 'PlaybookStatus',
        'playbookUuid' => 'PlaybookUuid',
        'succNum' => 'SuccNum',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->failNum) {
            $res['FailNum'] = $this->failNum;
        }

        if (null !== $this->failRate) {
            $res['FailRate'] = $this->failRate;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->historyMd5) {
            $res['HistoryMd5'] = $this->historyMd5;
        }

        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }

        if (null !== $this->lastRuntime) {
            $res['LastRuntime'] = $this->lastRuntime;
        }

        if (null !== $this->logicReleaseTaskflowMd5) {
            $res['LogicReleaseTaskflowMd5'] = $this->logicReleaseTaskflowMd5;
        }

        if (null !== $this->outputParams) {
            $res['OutputParams'] = $this->outputParams;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->playbookStatus) {
            $res['PlaybookStatus'] = $this->playbookStatus;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->succNum) {
            $res['SuccNum'] = $this->succNum;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FailNum'])) {
            $model->failNum = $map['FailNum'];
        }

        if (isset($map['FailRate'])) {
            $model->failRate = $map['FailRate'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HistoryMd5'])) {
            $model->historyMd5 = $map['HistoryMd5'];
        }

        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }

        if (isset($map['LastRuntime'])) {
            $model->lastRuntime = $map['LastRuntime'];
        }

        if (isset($map['LogicReleaseTaskflowMd5'])) {
            $model->logicReleaseTaskflowMd5 = $map['LogicReleaseTaskflowMd5'];
        }

        if (isset($map['OutputParams'])) {
            $model->outputParams = $map['OutputParams'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['PlaybookStatus'])) {
            $model->playbookStatus = $map['PlaybookStatus'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['SuccNum'])) {
            $model->succNum = $map['SuccNum'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
