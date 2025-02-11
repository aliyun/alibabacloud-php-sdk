<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data\list_\ruleList;

class list_ extends Model
{
    /**
     * @var float
     */
    public $avgLockTime;
    /**
     * @var float
     */
    public $avgQueryTime;
    /**
     * @var float
     */
    public $avgRowsAffected;
    /**
     * @var float
     */
    public $avgRowsExamined;
    /**
     * @var float
     */
    public $avgRowsSent;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $dbname;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var float
     */
    public $maxLockTime;
    /**
     * @var float
     */
    public $maxQueryTime;
    /**
     * @var int
     */
    public $maxRowsAffected;
    /**
     * @var int
     */
    public $maxRowsExamined;
    /**
     * @var int
     */
    public $maxRowsSent;
    /**
     * @var string
     */
    public $psql;
    /**
     * @var ruleList[]
     */
    public $ruleList;
    /**
     * @var string
     */
    public $sqlId;
    /**
     * @var string
     */
    public $sqlSample;
    /**
     * @var string
     */
    public $sqlType;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'avgLockTime'     => 'AvgLockTime',
        'avgQueryTime'    => 'AvgQueryTime',
        'avgRowsAffected' => 'AvgRowsAffected',
        'avgRowsExamined' => 'AvgRowsExamined',
        'avgRowsSent'     => 'AvgRowsSent',
        'count'           => 'Count',
        'dbname'          => 'Dbname',
        'instanceId'      => 'InstanceId',
        'maxLockTime'     => 'MaxLockTime',
        'maxQueryTime'    => 'MaxQueryTime',
        'maxRowsAffected' => 'MaxRowsAffected',
        'maxRowsExamined' => 'MaxRowsExamined',
        'maxRowsSent'     => 'MaxRowsSent',
        'psql'            => 'Psql',
        'ruleList'        => 'RuleList',
        'sqlId'           => 'SqlId',
        'sqlSample'       => 'SqlSample',
        'sqlType'         => 'SqlType',
        'user'            => 'User',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgLockTime) {
            $res['AvgLockTime'] = $this->avgLockTime;
        }

        if (null !== $this->avgQueryTime) {
            $res['AvgQueryTime'] = $this->avgQueryTime;
        }

        if (null !== $this->avgRowsAffected) {
            $res['AvgRowsAffected'] = $this->avgRowsAffected;
        }

        if (null !== $this->avgRowsExamined) {
            $res['AvgRowsExamined'] = $this->avgRowsExamined;
        }

        if (null !== $this->avgRowsSent) {
            $res['AvgRowsSent'] = $this->avgRowsSent;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->dbname) {
            $res['Dbname'] = $this->dbname;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }

        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }

        if (null !== $this->maxRowsAffected) {
            $res['MaxRowsAffected'] = $this->maxRowsAffected;
        }

        if (null !== $this->maxRowsExamined) {
            $res['MaxRowsExamined'] = $this->maxRowsExamined;
        }

        if (null !== $this->maxRowsSent) {
            $res['MaxRowsSent'] = $this->maxRowsSent;
        }

        if (null !== $this->psql) {
            $res['Psql'] = $this->psql;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlSample) {
            $res['SqlSample'] = $this->sqlSample;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AvgLockTime'])) {
            $model->avgLockTime = $map['AvgLockTime'];
        }

        if (isset($map['AvgQueryTime'])) {
            $model->avgQueryTime = $map['AvgQueryTime'];
        }

        if (isset($map['AvgRowsAffected'])) {
            $model->avgRowsAffected = $map['AvgRowsAffected'];
        }

        if (isset($map['AvgRowsExamined'])) {
            $model->avgRowsExamined = $map['AvgRowsExamined'];
        }

        if (isset($map['AvgRowsSent'])) {
            $model->avgRowsSent = $map['AvgRowsSent'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Dbname'])) {
            $model->dbname = $map['Dbname'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }

        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }

        if (isset($map['MaxRowsAffected'])) {
            $model->maxRowsAffected = $map['MaxRowsAffected'];
        }

        if (isset($map['MaxRowsExamined'])) {
            $model->maxRowsExamined = $map['MaxRowsExamined'];
        }

        if (isset($map['MaxRowsSent'])) {
            $model->maxRowsSent = $map['MaxRowsSent'];
        }

        if (isset($map['Psql'])) {
            $model->psql = $map['Psql'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
                }
            }
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlSample'])) {
            $model->sqlSample = $map['SqlSample'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
