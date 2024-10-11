<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkStatementsResponseBody;

use AlibabaCloud\Tea\Model;

class statements extends Model
{
    /**
     * @example print(2 + 2)
     *
     * @var string
     */
    public $code;

    /**
     * @example 1623033200754
     *
     * @var int
     */
    public $completedTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example {\\"status\\":\\"ok\\",\\"execution_count\\":1,\\"data\\":{\\"text/plain\\":\\"4\\"}}
     *
     * @var string
     */
    public $output;

    /**
     * @example 1
     *
     * @var float
     */
    public $progress;

    /**
     * @example 1623033200750
     *
     * @var int
     */
    public $startedTime;

    /**
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'code'          => 'Code',
        'completedTime' => 'CompletedTime',
        'id'            => 'Id',
        'output'        => 'Output',
        'progress'      => 'Progress',
        'startedTime'   => 'StartedTime',
        'state'         => 'State',
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
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
