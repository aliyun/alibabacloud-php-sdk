<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RunSemanticJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentSqlIndex;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int[]
     */
    public $execTypes;

    /**
     * @var string
     */
    public $executorJobId;

    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var int[]
     */
    public $statuses;
    protected $_name = [
        'currentSqlIndex' => 'CurrentSqlIndex',
        'env' => 'Env',
        'execTypes' => 'ExecTypes',
        'executorJobId' => 'ExecutorJobId',
        'jobRunId' => 'JobRunId',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->execTypes)) {
            Model::validateArray($this->execTypes);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentSqlIndex) {
            $res['CurrentSqlIndex'] = $this->currentSqlIndex;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->execTypes) {
            if (\is_array($this->execTypes)) {
                $res['ExecTypes'] = [];
                $n1 = 0;
                foreach ($this->execTypes as $item1) {
                    $res['ExecTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executorJobId) {
            $res['ExecutorJobId'] = $this->executorJobId;
        }

        if (null !== $this->jobRunId) {
            $res['JobRunId'] = $this->jobRunId;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CurrentSqlIndex'])) {
            $model->currentSqlIndex = $map['CurrentSqlIndex'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ExecTypes'])) {
            if (!empty($map['ExecTypes'])) {
                $model->execTypes = [];
                $n1 = 0;
                foreach ($map['ExecTypes'] as $item1) {
                    $model->execTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExecutorJobId'])) {
            $model->executorJobId = $map['ExecutorJobId'];
        }

        if (isset($map['JobRunId'])) {
            $model->jobRunId = $map['JobRunId'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
