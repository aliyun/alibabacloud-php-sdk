<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListDataCheckReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $checkColumCount;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $compareRowCount;

    /**
     * @var string
     */
    public $completionRate;

    /**
     * @var string
     */
    public $diffRate;

    /**
     * @var string
     */
    public $dstCompareColumn;

    /**
     * @var string
     */
    public $dstHint;

    /**
     * @var string
     */
    public $dstMetricName;

    /**
     * @var string[]
     */
    public $dstSqlList;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $execTime;

    /**
     * @var string
     */
    public $expDiffCount;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $isSkipped;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var int
     */
    public $metricColumCount;

    /**
     * @var int
     */
    public $metricPassColumCount;

    /**
     * @var int
     */
    public $onlyDstCount;

    /**
     * @var int
     */
    public $onlySrcCount;

    /**
     * @var int
     */
    public $passColumCount;

    /**
     * @var int
     */
    public $realDiffCount;

    /**
     * @var int
     */
    public $realSameCount;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var string
     */
    public $sourceColumn;

    /**
     * @var string
     */
    public $sourceCount;

    /**
     * @var string
     */
    public $sourceDataSource;

    /**
     * @var string
     */
    public $sourceError;

    /**
     * @var string
     */
    public $sourceGroupClause;

    /**
     * @var string
     */
    public $sourcePartition;

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
     * @var string
     */
    public $srcCompareColumn;

    /**
     * @var string
     */
    public $srcHint;

    /**
     * @var string
     */
    public $srcMetricName;

    /**
     * @var string[]
     */
    public $srcSqlList;

    /**
     * @var string
     */
    public $targetColumn;

    /**
     * @var string
     */
    public $targetCount;

    /**
     * @var string
     */
    public $targetDataSource;

    /**
     * @var string
     */
    public $targetError;

    /**
     * @var string
     */
    public $targetGroupClause;

    /**
     * @var string
     */
    public $targetPartition;

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
     * @var int
     */
    public $taskConfigId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $totalCountThreshold;
    protected $_name = [
        'batchId' => 'batchId',
        'checkColumCount' => 'checkColumCount',
        'checkResult' => 'checkResult',
        'compareRowCount' => 'compareRowCount',
        'completionRate' => 'completionRate',
        'diffRate' => 'diffRate',
        'dstCompareColumn' => 'dstCompareColumn',
        'dstHint' => 'dstHint',
        'dstMetricName' => 'dstMetricName',
        'dstSqlList' => 'dstSqlList',
        'errorMsg' => 'errorMsg',
        'execTime' => 'execTime',
        'expDiffCount' => 'expDiffCount',
        'finishTime' => 'finishTime',
        'isSkipped' => 'isSkipped',
        'jobId' => 'jobId',
        'jobStatus' => 'jobStatus',
        'metricColumCount' => 'metricColumCount',
        'metricPassColumCount' => 'metricPassColumCount',
        'onlyDstCount' => 'onlyDstCount',
        'onlySrcCount' => 'onlySrcCount',
        'passColumCount' => 'passColumCount',
        'realDiffCount' => 'realDiffCount',
        'realSameCount' => 'realSameCount',
        'resultId' => 'resultId',
        'sourceColumn' => 'sourceColumn',
        'sourceCount' => 'sourceCount',
        'sourceDataSource' => 'sourceDataSource',
        'sourceError' => 'sourceError',
        'sourceGroupClause' => 'sourceGroupClause',
        'sourcePartition' => 'sourcePartition',
        'sourceTable' => 'sourceTable',
        'sourceType' => 'sourceType',
        'sourceWhereClause' => 'sourceWhereClause',
        'srcCompareColumn' => 'srcCompareColumn',
        'srcHint' => 'srcHint',
        'srcMetricName' => 'srcMetricName',
        'srcSqlList' => 'srcSqlList',
        'targetColumn' => 'targetColumn',
        'targetCount' => 'targetCount',
        'targetDataSource' => 'targetDataSource',
        'targetError' => 'targetError',
        'targetGroupClause' => 'targetGroupClause',
        'targetPartition' => 'targetPartition',
        'targetTable' => 'targetTable',
        'targetType' => 'targetType',
        'targetWhereClause' => 'targetWhereClause',
        'taskConfigId' => 'taskConfigId',
        'templateName' => 'templateName',
        'threshold' => 'threshold',
        'totalCountThreshold' => 'totalCountThreshold',
    ];

    public function validate()
    {
        if (\is_array($this->dstSqlList)) {
            Model::validateArray($this->dstSqlList);
        }
        if (\is_array($this->srcSqlList)) {
            Model::validateArray($this->srcSqlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->checkColumCount) {
            $res['checkColumCount'] = $this->checkColumCount;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->compareRowCount) {
            $res['compareRowCount'] = $this->compareRowCount;
        }

        if (null !== $this->completionRate) {
            $res['completionRate'] = $this->completionRate;
        }

        if (null !== $this->diffRate) {
            $res['diffRate'] = $this->diffRate;
        }

        if (null !== $this->dstCompareColumn) {
            $res['dstCompareColumn'] = $this->dstCompareColumn;
        }

        if (null !== $this->dstHint) {
            $res['dstHint'] = $this->dstHint;
        }

        if (null !== $this->dstMetricName) {
            $res['dstMetricName'] = $this->dstMetricName;
        }

        if (null !== $this->dstSqlList) {
            if (\is_array($this->dstSqlList)) {
                $res['dstSqlList'] = [];
                $n1 = 0;
                foreach ($this->dstSqlList as $item1) {
                    $res['dstSqlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->execTime) {
            $res['execTime'] = $this->execTime;
        }

        if (null !== $this->expDiffCount) {
            $res['expDiffCount'] = $this->expDiffCount;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->isSkipped) {
            $res['isSkipped'] = $this->isSkipped;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        if (null !== $this->metricColumCount) {
            $res['metricColumCount'] = $this->metricColumCount;
        }

        if (null !== $this->metricPassColumCount) {
            $res['metricPassColumCount'] = $this->metricPassColumCount;
        }

        if (null !== $this->onlyDstCount) {
            $res['onlyDstCount'] = $this->onlyDstCount;
        }

        if (null !== $this->onlySrcCount) {
            $res['onlySrcCount'] = $this->onlySrcCount;
        }

        if (null !== $this->passColumCount) {
            $res['passColumCount'] = $this->passColumCount;
        }

        if (null !== $this->realDiffCount) {
            $res['realDiffCount'] = $this->realDiffCount;
        }

        if (null !== $this->realSameCount) {
            $res['realSameCount'] = $this->realSameCount;
        }

        if (null !== $this->resultId) {
            $res['resultId'] = $this->resultId;
        }

        if (null !== $this->sourceColumn) {
            $res['sourceColumn'] = $this->sourceColumn;
        }

        if (null !== $this->sourceCount) {
            $res['sourceCount'] = $this->sourceCount;
        }

        if (null !== $this->sourceDataSource) {
            $res['sourceDataSource'] = $this->sourceDataSource;
        }

        if (null !== $this->sourceError) {
            $res['sourceError'] = $this->sourceError;
        }

        if (null !== $this->sourceGroupClause) {
            $res['sourceGroupClause'] = $this->sourceGroupClause;
        }

        if (null !== $this->sourcePartition) {
            $res['sourcePartition'] = $this->sourcePartition;
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

        if (null !== $this->srcCompareColumn) {
            $res['srcCompareColumn'] = $this->srcCompareColumn;
        }

        if (null !== $this->srcHint) {
            $res['srcHint'] = $this->srcHint;
        }

        if (null !== $this->srcMetricName) {
            $res['srcMetricName'] = $this->srcMetricName;
        }

        if (null !== $this->srcSqlList) {
            if (\is_array($this->srcSqlList)) {
                $res['srcSqlList'] = [];
                $n1 = 0;
                foreach ($this->srcSqlList as $item1) {
                    $res['srcSqlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetColumn) {
            $res['targetColumn'] = $this->targetColumn;
        }

        if (null !== $this->targetCount) {
            $res['targetCount'] = $this->targetCount;
        }

        if (null !== $this->targetDataSource) {
            $res['targetDataSource'] = $this->targetDataSource;
        }

        if (null !== $this->targetError) {
            $res['targetError'] = $this->targetError;
        }

        if (null !== $this->targetGroupClause) {
            $res['targetGroupClause'] = $this->targetGroupClause;
        }

        if (null !== $this->targetPartition) {
            $res['targetPartition'] = $this->targetPartition;
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

        if (null !== $this->taskConfigId) {
            $res['taskConfigId'] = $this->taskConfigId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['checkColumCount'])) {
            $model->checkColumCount = $map['checkColumCount'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['compareRowCount'])) {
            $model->compareRowCount = $map['compareRowCount'];
        }

        if (isset($map['completionRate'])) {
            $model->completionRate = $map['completionRate'];
        }

        if (isset($map['diffRate'])) {
            $model->diffRate = $map['diffRate'];
        }

        if (isset($map['dstCompareColumn'])) {
            $model->dstCompareColumn = $map['dstCompareColumn'];
        }

        if (isset($map['dstHint'])) {
            $model->dstHint = $map['dstHint'];
        }

        if (isset($map['dstMetricName'])) {
            $model->dstMetricName = $map['dstMetricName'];
        }

        if (isset($map['dstSqlList'])) {
            if (!empty($map['dstSqlList'])) {
                $model->dstSqlList = [];
                $n1 = 0;
                foreach ($map['dstSqlList'] as $item1) {
                    $model->dstSqlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['execTime'])) {
            $model->execTime = $map['execTime'];
        }

        if (isset($map['expDiffCount'])) {
            $model->expDiffCount = $map['expDiffCount'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['isSkipped'])) {
            $model->isSkipped = $map['isSkipped'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        if (isset($map['metricColumCount'])) {
            $model->metricColumCount = $map['metricColumCount'];
        }

        if (isset($map['metricPassColumCount'])) {
            $model->metricPassColumCount = $map['metricPassColumCount'];
        }

        if (isset($map['onlyDstCount'])) {
            $model->onlyDstCount = $map['onlyDstCount'];
        }

        if (isset($map['onlySrcCount'])) {
            $model->onlySrcCount = $map['onlySrcCount'];
        }

        if (isset($map['passColumCount'])) {
            $model->passColumCount = $map['passColumCount'];
        }

        if (isset($map['realDiffCount'])) {
            $model->realDiffCount = $map['realDiffCount'];
        }

        if (isset($map['realSameCount'])) {
            $model->realSameCount = $map['realSameCount'];
        }

        if (isset($map['resultId'])) {
            $model->resultId = $map['resultId'];
        }

        if (isset($map['sourceColumn'])) {
            $model->sourceColumn = $map['sourceColumn'];
        }

        if (isset($map['sourceCount'])) {
            $model->sourceCount = $map['sourceCount'];
        }

        if (isset($map['sourceDataSource'])) {
            $model->sourceDataSource = $map['sourceDataSource'];
        }

        if (isset($map['sourceError'])) {
            $model->sourceError = $map['sourceError'];
        }

        if (isset($map['sourceGroupClause'])) {
            $model->sourceGroupClause = $map['sourceGroupClause'];
        }

        if (isset($map['sourcePartition'])) {
            $model->sourcePartition = $map['sourcePartition'];
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

        if (isset($map['srcCompareColumn'])) {
            $model->srcCompareColumn = $map['srcCompareColumn'];
        }

        if (isset($map['srcHint'])) {
            $model->srcHint = $map['srcHint'];
        }

        if (isset($map['srcMetricName'])) {
            $model->srcMetricName = $map['srcMetricName'];
        }

        if (isset($map['srcSqlList'])) {
            if (!empty($map['srcSqlList'])) {
                $model->srcSqlList = [];
                $n1 = 0;
                foreach ($map['srcSqlList'] as $item1) {
                    $model->srcSqlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetColumn'])) {
            $model->targetColumn = $map['targetColumn'];
        }

        if (isset($map['targetCount'])) {
            $model->targetCount = $map['targetCount'];
        }

        if (isset($map['targetDataSource'])) {
            $model->targetDataSource = $map['targetDataSource'];
        }

        if (isset($map['targetError'])) {
            $model->targetError = $map['targetError'];
        }

        if (isset($map['targetGroupClause'])) {
            $model->targetGroupClause = $map['targetGroupClause'];
        }

        if (isset($map['targetPartition'])) {
            $model->targetPartition = $map['targetPartition'];
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

        if (isset($map['taskConfigId'])) {
            $model->taskConfigId = $map['taskConfigId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['totalCountThreshold'])) {
            $model->totalCountThreshold = $map['totalCountThreshold'];
        }

        return $model;
    }
}
