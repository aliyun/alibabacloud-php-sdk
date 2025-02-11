<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisListResponseBody;

use AlibabaCloud\Dara\Model;

class SQLDiagnosisList extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $elapsedTime;
    /**
     * @var int
     */
    public $innerQueryId;
    /**
     * @var int
     */
    public $maxExclusiveTime;
    /**
     * @var int
     */
    public $peakMemory;
    /**
     * @var string
     */
    public $SQL;
    /**
     * @var int
     */
    public $scanRowCount;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $statementId;
    protected $_name = [
        'appId'            => 'AppId',
        'elapsedTime'      => 'ElapsedTime',
        'innerQueryId'     => 'InnerQueryId',
        'maxExclusiveTime' => 'MaxExclusiveTime',
        'peakMemory'       => 'PeakMemory',
        'SQL'              => 'SQL',
        'scanRowCount'     => 'ScanRowCount',
        'startTime'        => 'StartTime',
        'state'            => 'State',
        'statementId'      => 'StatementId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->innerQueryId) {
            $res['InnerQueryId'] = $this->innerQueryId;
        }

        if (null !== $this->maxExclusiveTime) {
            $res['MaxExclusiveTime'] = $this->maxExclusiveTime;
        }

        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }

        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }

        if (null !== $this->scanRowCount) {
            $res['ScanRowCount'] = $this->scanRowCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }

        if (isset($map['InnerQueryId'])) {
            $model->innerQueryId = $map['InnerQueryId'];
        }

        if (isset($map['MaxExclusiveTime'])) {
            $model->maxExclusiveTime = $map['MaxExclusiveTime'];
        }

        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }

        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        if (isset($map['ScanRowCount'])) {
            $model->scanRowCount = $map['ScanRowCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        return $model;
    }
}
