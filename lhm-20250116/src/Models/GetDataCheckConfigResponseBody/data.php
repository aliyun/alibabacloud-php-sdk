<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $algorithm;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $comparator;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var float
     */
    public $groupCountThreshold;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isFullTableCount;

    /**
     * @var int
     */
    public $isSkipped;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var int
     */
    public $sourceCheckAllColumn;

    /**
     * @var string
     */
    public $sourceColumns;

    /**
     * @var string
     */
    public $sourceCompareKey;

    /**
     * @var string
     */
    public $sourceDataSource;

    /**
     * @var string
     */
    public $sourceGroupClause;

    /**
     * @var string
     */
    public $sourceHint;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourcePartition;

    /**
     * @var string
     */
    public $sourceSql;

    /**
     * @var string
     */
    public $sourceTable;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceWhereClause;

    /**
     * @var int
     */
    public $targetCheckAllColumn;

    /**
     * @var string
     */
    public $targetColumns;

    /**
     * @var string
     */
    public $targetCompareKey;

    /**
     * @var string
     */
    public $targetDataSource;

    /**
     * @var string
     */
    public $targetGroupClause;

    /**
     * @var string
     */
    public $targetHint;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetPartition;

    /**
     * @var string
     */
    public $targetSql;

    /**
     * @var string
     */
    public $targetTable;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetWhereClause;

    /**
     * @var string
     */
    public $taskConfigInfo;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var float
     */
    public $totalCountThreshold;
    protected $_name = [
        'algorithm' => 'algorithm',
        'batchSize' => 'batchSize',
        'checkType' => 'checkType',
        'comparator' => 'comparator',
        'extra' => 'extra',
        'groupCountThreshold' => 'groupCountThreshold',
        'id' => 'id',
        'isFullTableCount' => 'isFullTableCount',
        'isSkipped' => 'isSkipped',
        'metricType' => 'metricType',
        'sourceCheckAllColumn' => 'sourceCheckAllColumn',
        'sourceColumns' => 'sourceColumns',
        'sourceCompareKey' => 'sourceCompareKey',
        'sourceDataSource' => 'sourceDataSource',
        'sourceGroupClause' => 'sourceGroupClause',
        'sourceHint' => 'sourceHint',
        'sourceId' => 'sourceId',
        'sourcePartition' => 'sourcePartition',
        'sourceSql' => 'sourceSql',
        'sourceTable' => 'sourceTable',
        'sourceType' => 'sourceType',
        'sourceWhereClause' => 'sourceWhereClause',
        'targetCheckAllColumn' => 'targetCheckAllColumn',
        'targetColumns' => 'targetColumns',
        'targetCompareKey' => 'targetCompareKey',
        'targetDataSource' => 'targetDataSource',
        'targetGroupClause' => 'targetGroupClause',
        'targetHint' => 'targetHint',
        'targetId' => 'targetId',
        'targetPartition' => 'targetPartition',
        'targetSql' => 'targetSql',
        'targetTable' => 'targetTable',
        'targetType' => 'targetType',
        'targetWhereClause' => 'targetWhereClause',
        'taskConfigInfo' => 'taskConfigInfo',
        'taskId' => 'taskId',
        'totalCountThreshold' => 'totalCountThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }

        if (null !== $this->batchSize) {
            $res['batchSize'] = $this->batchSize;
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->comparator) {
            $res['comparator'] = $this->comparator;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->groupCountThreshold) {
            $res['groupCountThreshold'] = $this->groupCountThreshold;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isFullTableCount) {
            $res['isFullTableCount'] = $this->isFullTableCount;
        }

        if (null !== $this->isSkipped) {
            $res['isSkipped'] = $this->isSkipped;
        }

        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }

        if (null !== $this->sourceCheckAllColumn) {
            $res['sourceCheckAllColumn'] = $this->sourceCheckAllColumn;
        }

        if (null !== $this->sourceColumns) {
            $res['sourceColumns'] = $this->sourceColumns;
        }

        if (null !== $this->sourceCompareKey) {
            $res['sourceCompareKey'] = $this->sourceCompareKey;
        }

        if (null !== $this->sourceDataSource) {
            $res['sourceDataSource'] = $this->sourceDataSource;
        }

        if (null !== $this->sourceGroupClause) {
            $res['sourceGroupClause'] = $this->sourceGroupClause;
        }

        if (null !== $this->sourceHint) {
            $res['sourceHint'] = $this->sourceHint;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourcePartition) {
            $res['sourcePartition'] = $this->sourcePartition;
        }

        if (null !== $this->sourceSql) {
            $res['sourceSql'] = $this->sourceSql;
        }

        if (null !== $this->sourceTable) {
            $res['sourceTable'] = $this->sourceTable;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceWhereClause) {
            $res['sourceWhereClause'] = $this->sourceWhereClause;
        }

        if (null !== $this->targetCheckAllColumn) {
            $res['targetCheckAllColumn'] = $this->targetCheckAllColumn;
        }

        if (null !== $this->targetColumns) {
            $res['targetColumns'] = $this->targetColumns;
        }

        if (null !== $this->targetCompareKey) {
            $res['targetCompareKey'] = $this->targetCompareKey;
        }

        if (null !== $this->targetDataSource) {
            $res['targetDataSource'] = $this->targetDataSource;
        }

        if (null !== $this->targetGroupClause) {
            $res['targetGroupClause'] = $this->targetGroupClause;
        }

        if (null !== $this->targetHint) {
            $res['targetHint'] = $this->targetHint;
        }

        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }

        if (null !== $this->targetPartition) {
            $res['targetPartition'] = $this->targetPartition;
        }

        if (null !== $this->targetSql) {
            $res['targetSql'] = $this->targetSql;
        }

        if (null !== $this->targetTable) {
            $res['targetTable'] = $this->targetTable;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->targetWhereClause) {
            $res['targetWhereClause'] = $this->targetWhereClause;
        }

        if (null !== $this->taskConfigInfo) {
            $res['taskConfigInfo'] = $this->taskConfigInfo;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->totalCountThreshold) {
            $res['totalCountThreshold'] = $this->totalCountThreshold;
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
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }

        if (isset($map['batchSize'])) {
            $model->batchSize = $map['batchSize'];
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['comparator'])) {
            $model->comparator = $map['comparator'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['groupCountThreshold'])) {
            $model->groupCountThreshold = $map['groupCountThreshold'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isFullTableCount'])) {
            $model->isFullTableCount = $map['isFullTableCount'];
        }

        if (isset($map['isSkipped'])) {
            $model->isSkipped = $map['isSkipped'];
        }

        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }

        if (isset($map['sourceCheckAllColumn'])) {
            $model->sourceCheckAllColumn = $map['sourceCheckAllColumn'];
        }

        if (isset($map['sourceColumns'])) {
            $model->sourceColumns = $map['sourceColumns'];
        }

        if (isset($map['sourceCompareKey'])) {
            $model->sourceCompareKey = $map['sourceCompareKey'];
        }

        if (isset($map['sourceDataSource'])) {
            $model->sourceDataSource = $map['sourceDataSource'];
        }

        if (isset($map['sourceGroupClause'])) {
            $model->sourceGroupClause = $map['sourceGroupClause'];
        }

        if (isset($map['sourceHint'])) {
            $model->sourceHint = $map['sourceHint'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourcePartition'])) {
            $model->sourcePartition = $map['sourcePartition'];
        }

        if (isset($map['sourceSql'])) {
            $model->sourceSql = $map['sourceSql'];
        }

        if (isset($map['sourceTable'])) {
            $model->sourceTable = $map['sourceTable'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['sourceWhereClause'])) {
            $model->sourceWhereClause = $map['sourceWhereClause'];
        }

        if (isset($map['targetCheckAllColumn'])) {
            $model->targetCheckAllColumn = $map['targetCheckAllColumn'];
        }

        if (isset($map['targetColumns'])) {
            $model->targetColumns = $map['targetColumns'];
        }

        if (isset($map['targetCompareKey'])) {
            $model->targetCompareKey = $map['targetCompareKey'];
        }

        if (isset($map['targetDataSource'])) {
            $model->targetDataSource = $map['targetDataSource'];
        }

        if (isset($map['targetGroupClause'])) {
            $model->targetGroupClause = $map['targetGroupClause'];
        }

        if (isset($map['targetHint'])) {
            $model->targetHint = $map['targetHint'];
        }

        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }

        if (isset($map['targetPartition'])) {
            $model->targetPartition = $map['targetPartition'];
        }

        if (isset($map['targetSql'])) {
            $model->targetSql = $map['targetSql'];
        }

        if (isset($map['targetTable'])) {
            $model->targetTable = $map['targetTable'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['targetWhereClause'])) {
            $model->targetWhereClause = $map['targetWhereClause'];
        }

        if (isset($map['taskConfigInfo'])) {
            $model->taskConfigInfo = $map['taskConfigInfo'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['totalCountThreshold'])) {
            $model->totalCountThreshold = $map['totalCountThreshold'];
        }

        return $model;
    }
}
