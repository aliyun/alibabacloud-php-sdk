<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class StatementInfo extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $completedTimeInMills;

    /**
     * @var string
     */
    public $output;

    /**
     * @var float
     */
    public $process;

    /**
     * @var int
     */
    public $startedTimeInMills;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statementId;
    protected $_name = [
        'code'                 => 'Code',
        'completedTimeInMills' => 'CompletedTimeInMills',
        'output'               => 'Output',
        'process'              => 'Process',
        'startedTimeInMills'   => 'StartedTimeInMills',
        'state'                => 'State',
        'statementId'          => 'StatementId',
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
        if (null !== $this->completedTimeInMills) {
            $res['CompletedTimeInMills'] = $this->completedTimeInMills;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->startedTimeInMills) {
            $res['StartedTimeInMills'] = $this->startedTimeInMills;
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
     * @return StatementInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompletedTimeInMills'])) {
            $model->completedTimeInMills = $map['CompletedTimeInMills'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['StartedTimeInMills'])) {
            $model->startedTimeInMills = $map['StartedTimeInMills'];
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
