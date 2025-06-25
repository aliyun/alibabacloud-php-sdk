<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplStatementResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeState;

    /**
     * @var string
     */
    public $codeType;

    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $statementId;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'code' => 'Code',
        'codeState' => 'CodeState',
        'codeType' => 'CodeType',
        'columns' => 'Columns',
        'endTime' => 'EndTime',
        'error' => 'Error',
        'output' => 'Output',
        'outputType' => 'OutputType',
        'startTime' => 'StartTime',
        'statementId' => 'StatementId',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = $item1;
                    ++$n1;
                }
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
