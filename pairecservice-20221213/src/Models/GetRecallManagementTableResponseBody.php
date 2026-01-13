<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementTableResponseBody\fields;

class GetRecallManagementTableResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableDataSizeFluctuationThreshold;

    /**
     * @var bool
     */
    public $enableRowCountFluctuationThreshold;

    /**
     * @var fields
     */
    public $fields;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $indexEffectiveTime;

    /**
     * @var string
     */
    public $indexVersionId;

    /**
     * @var int
     */
    public $maxDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $maxRowCountFluctuationThreshold;

    /**
     * @var string
     */
    public $maxcomputeProjectName;

    /**
     * @var string
     */
    public $maxcomputeSchema;

    /**
     * @var string
     */
    public $maxcomputeTableName;

    /**
     * @var int
     */
    public $minDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $minRowCountFluctuationThreshold;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionFields;

    /**
     * @var string
     */
    public $recallManagementTableId;

    /**
     * @var string
     */
    public $recallType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'canDelete' => 'CanDelete',
        'config' => 'Config',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'enableDataSizeFluctuationThreshold' => 'EnableDataSizeFluctuationThreshold',
        'enableRowCountFluctuationThreshold' => 'EnableRowCountFluctuationThreshold',
        'fields' => 'Fields',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'indexEffectiveTime' => 'IndexEffectiveTime',
        'indexVersionId' => 'IndexVersionId',
        'maxDataSizeFluctuationThreshold' => 'MaxDataSizeFluctuationThreshold',
        'maxRowCountFluctuationThreshold' => 'MaxRowCountFluctuationThreshold',
        'maxcomputeProjectName' => 'MaxcomputeProjectName',
        'maxcomputeSchema' => 'MaxcomputeSchema',
        'maxcomputeTableName' => 'MaxcomputeTableName',
        'minDataSizeFluctuationThreshold' => 'MinDataSizeFluctuationThreshold',
        'minRowCountFluctuationThreshold' => 'MinRowCountFluctuationThreshold',
        'name' => 'Name',
        'partitionFields' => 'PartitionFields',
        'recallManagementTableId' => 'RecallManagementTableId',
        'recallType' => 'RecallType',
        'requestId' => 'RequestId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->fields) {
            $this->fields->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableDataSizeFluctuationThreshold) {
            $res['EnableDataSizeFluctuationThreshold'] = $this->enableDataSizeFluctuationThreshold;
        }

        if (null !== $this->enableRowCountFluctuationThreshold) {
            $res['EnableRowCountFluctuationThreshold'] = $this->enableRowCountFluctuationThreshold;
        }

        if (null !== $this->fields) {
            $res['Fields'] = null !== $this->fields ? $this->fields->toArray($noStream) : $this->fields;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->indexEffectiveTime) {
            $res['IndexEffectiveTime'] = $this->indexEffectiveTime;
        }

        if (null !== $this->indexVersionId) {
            $res['IndexVersionId'] = $this->indexVersionId;
        }

        if (null !== $this->maxDataSizeFluctuationThreshold) {
            $res['MaxDataSizeFluctuationThreshold'] = $this->maxDataSizeFluctuationThreshold;
        }

        if (null !== $this->maxRowCountFluctuationThreshold) {
            $res['MaxRowCountFluctuationThreshold'] = $this->maxRowCountFluctuationThreshold;
        }

        if (null !== $this->maxcomputeProjectName) {
            $res['MaxcomputeProjectName'] = $this->maxcomputeProjectName;
        }

        if (null !== $this->maxcomputeSchema) {
            $res['MaxcomputeSchema'] = $this->maxcomputeSchema;
        }

        if (null !== $this->maxcomputeTableName) {
            $res['MaxcomputeTableName'] = $this->maxcomputeTableName;
        }

        if (null !== $this->minDataSizeFluctuationThreshold) {
            $res['MinDataSizeFluctuationThreshold'] = $this->minDataSizeFluctuationThreshold;
        }

        if (null !== $this->minRowCountFluctuationThreshold) {
            $res['MinRowCountFluctuationThreshold'] = $this->minRowCountFluctuationThreshold;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionFields) {
            $res['PartitionFields'] = $this->partitionFields;
        }

        if (null !== $this->recallManagementTableId) {
            $res['RecallManagementTableId'] = $this->recallManagementTableId;
        }

        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableDataSizeFluctuationThreshold'])) {
            $model->enableDataSizeFluctuationThreshold = $map['EnableDataSizeFluctuationThreshold'];
        }

        if (isset($map['EnableRowCountFluctuationThreshold'])) {
            $model->enableRowCountFluctuationThreshold = $map['EnableRowCountFluctuationThreshold'];
        }

        if (isset($map['Fields'])) {
            $model->fields = fields::fromMap($map['Fields']);
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IndexEffectiveTime'])) {
            $model->indexEffectiveTime = $map['IndexEffectiveTime'];
        }

        if (isset($map['IndexVersionId'])) {
            $model->indexVersionId = $map['IndexVersionId'];
        }

        if (isset($map['MaxDataSizeFluctuationThreshold'])) {
            $model->maxDataSizeFluctuationThreshold = $map['MaxDataSizeFluctuationThreshold'];
        }

        if (isset($map['MaxRowCountFluctuationThreshold'])) {
            $model->maxRowCountFluctuationThreshold = $map['MaxRowCountFluctuationThreshold'];
        }

        if (isset($map['MaxcomputeProjectName'])) {
            $model->maxcomputeProjectName = $map['MaxcomputeProjectName'];
        }

        if (isset($map['MaxcomputeSchema'])) {
            $model->maxcomputeSchema = $map['MaxcomputeSchema'];
        }

        if (isset($map['MaxcomputeTableName'])) {
            $model->maxcomputeTableName = $map['MaxcomputeTableName'];
        }

        if (isset($map['MinDataSizeFluctuationThreshold'])) {
            $model->minDataSizeFluctuationThreshold = $map['MinDataSizeFluctuationThreshold'];
        }

        if (isset($map['MinRowCountFluctuationThreshold'])) {
            $model->minRowCountFluctuationThreshold = $map['MinRowCountFluctuationThreshold'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionFields'])) {
            $model->partitionFields = $map['PartitionFields'];
        }

        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
