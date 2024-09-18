<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkBatchSQLStatement extends Model
{
    /**
     * @example SELECT 100
     *
     * @var string
     */
    public $code;

    /**
     * @example 1723521767000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example table is not found
     *
     * @var string
     */
    public $error;

    /**
     * @example JSON格式执行结果集
     *
     * @var string
     */
    public $result;

    /**
     * @example oss://yourbucket/result.json
     *
     * @var string
     */
    public $resultUri;

    /**
     * @example 1723521767000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $state;

    /**
     * @example amv-20240711-stmt
     *
     * @var string
     */
    public $statementId;
    protected $_name = [
        'code'        => 'Code',
        'endTime'     => 'EndTime',
        'error'       => 'Error',
        'result'      => 'Result',
        'resultUri'   => 'ResultUri',
        'startTime'   => 'StartTime',
        'state'       => 'State',
        'statementId' => 'StatementId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultUri) {
            $res['ResultUri'] = $this->resultUri;
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

    /**
     * @param array $map
     *
     * @return SparkBatchSQLStatement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ResultUri'])) {
            $model->resultUri = $map['ResultUri'];
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
