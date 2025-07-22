<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeQueryExplainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $argument;

    /**
     * @var string
     */
    public $avgRowSize;

    /**
     * @var string
     */
    public $definedValues;

    /**
     * @var string
     */
    public $estimateCPU;

    /**
     * @var string
     */
    public $estimateExecutions;

    /**
     * @var string
     */
    public $estimateIO;

    /**
     * @var string
     */
    public $estimateRows;

    /**
     * @var string
     */
    public $extra;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $indexList;

    /**
     * @example PRIMARY
     *
     * @var string
     */
    public $key;

    /**
     * @example 3
     *
     * @var string
     */
    public $keyLen;

    /**
     * @var string
     */
    public $logicalOp;

    /**
     * @var string[]
     */
    public $logicalPlanList;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $outputList;

    /**
     * @var string
     */
    public $parallel;

    /**
     * @var string
     */
    public $parent;

    /**
     * @var string
     */
    public $physicalOp;

    /**
     * @example test_idx
     *
     * @var string
     */
    public $possibleKeys;

    /**
     * @var string
     */
    public $queryPlan;

    /**
     * @example test_column
     *
     * @var string
     */
    public $ref;

    /**
     * @example 1000
     *
     * @var string
     */
    public $rows;

    /**
     * @example SIMPLE
     *
     * @var string
     */
    public $selectType;

    /**
     * @var string
     */
    public $stmtId;

    /**
     * @var string
     */
    public $stmtText;

    /**
     * @example test
     *
     * @var string
     */
    public $table;

    /**
     * @var string[]
     */
    public $tableList;

    /**
     * @var string
     */
    public $totalSubtreeCost;

    /**
     * @example eq_ref
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $warnings;
    protected $_name = [
        'argument' => 'Argument',
        'avgRowSize' => 'AvgRowSize',
        'definedValues' => 'DefinedValues',
        'estimateCPU' => 'EstimateCPU',
        'estimateExecutions' => 'EstimateExecutions',
        'estimateIO' => 'EstimateIO',
        'estimateRows' => 'EstimateRows',
        'extra' => 'Extra',
        'id' => 'Id',
        'indexList' => 'IndexList',
        'key' => 'Key',
        'keyLen' => 'KeyLen',
        'logicalOp' => 'LogicalOp',
        'logicalPlanList' => 'LogicalPlanList',
        'nodeId' => 'NodeId',
        'outputList' => 'OutputList',
        'parallel' => 'Parallel',
        'parent' => 'Parent',
        'physicalOp' => 'PhysicalOp',
        'possibleKeys' => 'PossibleKeys',
        'queryPlan' => 'QueryPlan',
        'ref' => 'Ref',
        'rows' => 'Rows',
        'selectType' => 'SelectType',
        'stmtId' => 'StmtId',
        'stmtText' => 'StmtText',
        'table' => 'Table',
        'tableList' => 'TableList',
        'totalSubtreeCost' => 'TotalSubtreeCost',
        'type' => 'Type',
        'warnings' => 'Warnings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }
        if (null !== $this->avgRowSize) {
            $res['AvgRowSize'] = $this->avgRowSize;
        }
        if (null !== $this->definedValues) {
            $res['DefinedValues'] = $this->definedValues;
        }
        if (null !== $this->estimateCPU) {
            $res['EstimateCPU'] = $this->estimateCPU;
        }
        if (null !== $this->estimateExecutions) {
            $res['EstimateExecutions'] = $this->estimateExecutions;
        }
        if (null !== $this->estimateIO) {
            $res['EstimateIO'] = $this->estimateIO;
        }
        if (null !== $this->estimateRows) {
            $res['EstimateRows'] = $this->estimateRows;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->indexList) {
            $res['IndexList'] = $this->indexList;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyLen) {
            $res['KeyLen'] = $this->keyLen;
        }
        if (null !== $this->logicalOp) {
            $res['LogicalOp'] = $this->logicalOp;
        }
        if (null !== $this->logicalPlanList) {
            $res['LogicalPlanList'] = $this->logicalPlanList;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = $this->outputList;
        }
        if (null !== $this->parallel) {
            $res['Parallel'] = $this->parallel;
        }
        if (null !== $this->parent) {
            $res['Parent'] = $this->parent;
        }
        if (null !== $this->physicalOp) {
            $res['PhysicalOp'] = $this->physicalOp;
        }
        if (null !== $this->possibleKeys) {
            $res['PossibleKeys'] = $this->possibleKeys;
        }
        if (null !== $this->queryPlan) {
            $res['QueryPlan'] = $this->queryPlan;
        }
        if (null !== $this->ref) {
            $res['Ref'] = $this->ref;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->selectType) {
            $res['SelectType'] = $this->selectType;
        }
        if (null !== $this->stmtId) {
            $res['StmtId'] = $this->stmtId;
        }
        if (null !== $this->stmtText) {
            $res['StmtText'] = $this->stmtText;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = $this->tableList;
        }
        if (null !== $this->totalSubtreeCost) {
            $res['TotalSubtreeCost'] = $this->totalSubtreeCost;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->warnings) {
            $res['Warnings'] = $this->warnings;
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
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }
        if (isset($map['AvgRowSize'])) {
            $model->avgRowSize = $map['AvgRowSize'];
        }
        if (isset($map['DefinedValues'])) {
            $model->definedValues = $map['DefinedValues'];
        }
        if (isset($map['EstimateCPU'])) {
            $model->estimateCPU = $map['EstimateCPU'];
        }
        if (isset($map['EstimateExecutions'])) {
            $model->estimateExecutions = $map['EstimateExecutions'];
        }
        if (isset($map['EstimateIO'])) {
            $model->estimateIO = $map['EstimateIO'];
        }
        if (isset($map['EstimateRows'])) {
            $model->estimateRows = $map['EstimateRows'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IndexList'])) {
            if (!empty($map['IndexList'])) {
                $model->indexList = $map['IndexList'];
            }
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyLen'])) {
            $model->keyLen = $map['KeyLen'];
        }
        if (isset($map['LogicalOp'])) {
            $model->logicalOp = $map['LogicalOp'];
        }
        if (isset($map['LogicalPlanList'])) {
            if (!empty($map['LogicalPlanList'])) {
                $model->logicalPlanList = $map['LogicalPlanList'];
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OutputList'])) {
            $model->outputList = $map['OutputList'];
        }
        if (isset($map['Parallel'])) {
            $model->parallel = $map['Parallel'];
        }
        if (isset($map['Parent'])) {
            $model->parent = $map['Parent'];
        }
        if (isset($map['PhysicalOp'])) {
            $model->physicalOp = $map['PhysicalOp'];
        }
        if (isset($map['PossibleKeys'])) {
            $model->possibleKeys = $map['PossibleKeys'];
        }
        if (isset($map['QueryPlan'])) {
            $model->queryPlan = $map['QueryPlan'];
        }
        if (isset($map['Ref'])) {
            $model->ref = $map['Ref'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['SelectType'])) {
            $model->selectType = $map['SelectType'];
        }
        if (isset($map['StmtId'])) {
            $model->stmtId = $map['StmtId'];
        }
        if (isset($map['StmtText'])) {
            $model->stmtText = $map['StmtText'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = $map['TableList'];
            }
        }
        if (isset($map['TotalSubtreeCost'])) {
            $model->totalSubtreeCost = $map['TotalSubtreeCost'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Warnings'])) {
            $model->warnings = $map['Warnings'];
        }

        return $model;
    }
}
