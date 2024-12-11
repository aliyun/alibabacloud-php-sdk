<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CancelSparkReplStatementResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 190063530332****
     *
     * @var int
     */
    public $aliyunUid;

    /**
     * @example print(1+1)
     *
     * @var string
     */
    public $code;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $codeState;

    /**
     * @example PYTHON
     *
     * @var string
     */
    public $codeType;

    /**
     * @var string[]
     */
    public $columns;

    /**
     * @example 1730968056000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example StackOverflow Exception：
     *
     * @var string
     */
    public $error;

    /**
     * @example {"text/plain": "2"}
     *
     * @var string
     */
    public $output;

    /**
     * @example TEXT
     *
     * @var string
     */
    public $outputType;

    /**
     * @example 1730968056000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 123
     *
     * @var int
     */
    public $statementId;
    protected $_name = [
        'aliyunUid'   => 'AliyunUid',
        'code'        => 'Code',
        'codeState'   => 'CodeState',
        'codeType'    => 'CodeType',
        'columns'     => 'Columns',
        'endTime'     => 'EndTime',
        'error'       => 'Error',
        'output'      => 'Output',
        'outputType'  => 'OutputType',
        'startTime'   => 'StartTime',
        'statementId' => 'StatementId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeState) {
            $res['CodeState'] = $this->codeState;
        }
        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeState'])) {
            $model->codeState = $map['CodeState'];
        }
        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = $map['Columns'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        return $model;
    }
}
