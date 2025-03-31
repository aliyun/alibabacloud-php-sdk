<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SparkBatchSQLStatement extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $code;

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
    public $result;

    /**
     * @var string
     */
    public $resultUri;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statementId;
    protected $_name = [
        'appId' => 'AppId',
        'code' => 'Code',
        'endTime' => 'EndTime',
        'error' => 'Error',
        'result' => 'Result',
        'resultUri' => 'ResultUri',
        'startTime' => 'StartTime',
        'state' => 'State',
        'statementId' => 'StatementId',
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
