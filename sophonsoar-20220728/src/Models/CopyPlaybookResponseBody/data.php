<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @example This is a action of processing for WAF
     *
     * @var string
     */
    public $description;

    /**
     * @example 11111
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1
     *
     * @var int
     */
    public $failNum;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $failRate;

    /**
     * @example 1655951601000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1638270967000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var int
     */
    public $historyMd5;

    /**
     * @example [{\\"name\\":\\"1\\",\\"dataType\\":\\"String\\",\\"required\\":false,\\"isArray\\":false,\\"example\\":\\"\\",\\"description\\":\\"\\",\\"id\\":0,\\"typeName\\":\\"String\\",\\"dataClass\\":\\"normal\\"}]
     *
     * @var string
     */
    public $inputParams;

    /**
     * @example 1725258397847
     *
     * @var int
     */
    public $lastRuntime;

    /**
     * @example 037046****1b00c4717963818ccbf2xx
     *
     * @var string
     */
    public $logicReleaseTaskflowMd5;

    /**
     * @example []
     *
     * @var string
     */
    public $outputParams;

    /**
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @example 1
     *
     * @var int
     */
    public $permission;

    /**
     * @example 1
     *
     * @var int
     */
    public $playbookStatus;

    /**
     * @example 9e38111e-9794-4784-9ca8-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 1
     *
     * @var int
     */
    public $succNum;

    /**
     * @example 13760*****8718726
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
