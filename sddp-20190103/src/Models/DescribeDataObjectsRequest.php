<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeDataObjectsRequest extends Model
{
    /**
     * @var int
     */
    public $APIVersion;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var int
     */
    public $featureType;

    /**
     * @var int
     */
    public $fileCategoryCode;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var int
     */
    public $logStoreFlag;

    /**
     * @var int
     */
    public $memberAccount;

    /**
     * @var string
     */
    public $modelIds;

    /**
     * @var string
     */
    public $modelTagIds;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentCategoryIds;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productIds;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $riskLevelIdList;

    /**
     * @var string
     */
    public $riskLevels;

    /**
     * @var string
     */
    public $ruleIds;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'APIVersion' => 'APIVersion',
        'bucket' => 'Bucket',
        'currentPage' => 'CurrentPage',
        'dbName' => 'DbName',
        'domainId' => 'DomainId',
        'featureType' => 'FeatureType',
        'fileCategoryCode' => 'FileCategoryCode',
        'fileType' => 'FileType',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'logStore' => 'LogStore',
        'logStoreFlag' => 'LogStoreFlag',
        'memberAccount' => 'MemberAccount',
        'modelIds' => 'ModelIds',
        'modelTagIds' => 'ModelTagIds',
        'pageSize' => 'PageSize',
        'parentCategoryIds' => 'ParentCategoryIds',
        'path' => 'Path',
        'productId' => 'ProductId',
        'productIds' => 'ProductIds',
        'project' => 'Project',
        'queryName' => 'QueryName',
        'regionId' => 'RegionId',
        'riskLevelIdList' => 'RiskLevelIdList',
        'riskLevels' => 'RiskLevels',
        'ruleIds' => 'RuleIds',
        'serviceRegionId' => 'ServiceRegionId',
        'tableName' => 'TableName',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIVersion) {
            $res['APIVersion'] = $this->APIVersion;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->fileCategoryCode) {
            $res['FileCategoryCode'] = $this->fileCategoryCode;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        if (null !== $this->logStoreFlag) {
            $res['LogStoreFlag'] = $this->logStoreFlag;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->modelIds) {
            $res['ModelIds'] = $this->modelIds;
        }

        if (null !== $this->modelTagIds) {
            $res['ModelTagIds'] = $this->modelTagIds;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->parentCategoryIds) {
            $res['ParentCategoryIds'] = $this->parentCategoryIds;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productIds) {
            $res['ProductIds'] = $this->productIds;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->queryName) {
            $res['QueryName'] = $this->queryName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskLevelIdList) {
            $res['RiskLevelIdList'] = $this->riskLevelIdList;
        }

        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['APIVersion'])) {
            $model->APIVersion = $map['APIVersion'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['FileCategoryCode'])) {
            $model->fileCategoryCode = $map['FileCategoryCode'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        if (isset($map['LogStoreFlag'])) {
            $model->logStoreFlag = $map['LogStoreFlag'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['ModelIds'])) {
            $model->modelIds = $map['ModelIds'];
        }

        if (isset($map['ModelTagIds'])) {
            $model->modelTagIds = $map['ModelTagIds'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParentCategoryIds'])) {
            $model->parentCategoryIds = $map['ParentCategoryIds'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductIds'])) {
            $model->productIds = $map['ProductIds'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['QueryName'])) {
            $model->queryName = $map['QueryName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskLevelIdList'])) {
            $model->riskLevelIdList = $map['RiskLevelIdList'];
        }

        if (isset($map['RiskLevels'])) {
            $model->riskLevels = $map['RiskLevels'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
