<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchByObjectIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchByObjectIdResponseBody\qualityWatchInfo\dataSourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchByObjectIdResponseBody\qualityWatchInfo\indexInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchByObjectIdResponseBody\qualityWatchInfo\tableInfo;

class qualityWatchInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @var int
     */
    public $enabledRuleCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var indexInfo
     */
    public $indexInfo;

    /**
     * @var int
     */
    public $latestWatchTaskId;

    /**
     * @var string
     */
    public $latestWatchTaskStatus;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $qualityOwner;

    /**
     * @var string
     */
    public $qualityOwnerName;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tableInfo
     */
    public $tableInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'dataSourceInfo' => 'DataSourceInfo',
        'enabledRuleCount' => 'EnabledRuleCount',
        'id' => 'Id',
        'indexInfo' => 'IndexInfo',
        'latestWatchTaskId' => 'LatestWatchTaskId',
        'latestWatchTaskStatus' => 'LatestWatchTaskStatus',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'qualityOwner' => 'QualityOwner',
        'qualityOwnerName' => 'QualityOwnerName',
        'ruleCount' => 'RuleCount',
        'status' => 'Status',
        'tableInfo' => 'TableInfo',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (null !== $this->indexInfo) {
            $this->indexInfo->validate();
        }
        if (null !== $this->tableInfo) {
            $this->tableInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->dataSourceInfo) {
            $res['DataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toArray($noStream) : $this->dataSourceInfo;
        }

        if (null !== $this->enabledRuleCount) {
            $res['EnabledRuleCount'] = $this->enabledRuleCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->indexInfo) {
            $res['IndexInfo'] = null !== $this->indexInfo ? $this->indexInfo->toArray($noStream) : $this->indexInfo;
        }

        if (null !== $this->latestWatchTaskId) {
            $res['LatestWatchTaskId'] = $this->latestWatchTaskId;
        }

        if (null !== $this->latestWatchTaskStatus) {
            $res['LatestWatchTaskStatus'] = $this->latestWatchTaskStatus;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qualityOwner) {
            $res['QualityOwner'] = $this->qualityOwner;
        }

        if (null !== $this->qualityOwnerName) {
            $res['QualityOwnerName'] = $this->qualityOwnerName;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toArray($noStream) : $this->tableInfo;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['DataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['DataSourceInfo']);
        }

        if (isset($map['EnabledRuleCount'])) {
            $model->enabledRuleCount = $map['EnabledRuleCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IndexInfo'])) {
            $model->indexInfo = indexInfo::fromMap($map['IndexInfo']);
        }

        if (isset($map['LatestWatchTaskId'])) {
            $model->latestWatchTaskId = $map['LatestWatchTaskId'];
        }

        if (isset($map['LatestWatchTaskStatus'])) {
            $model->latestWatchTaskStatus = $map['LatestWatchTaskStatus'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualityOwner'])) {
            $model->qualityOwner = $map['QualityOwner'];
        }

        if (isset($map['QualityOwnerName'])) {
            $model->qualityOwnerName = $map['QualityOwnerName'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
