<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawTaskResponseBody\task\error;

class task extends Model
{
    /**
     * @var int
     */
    public $createdAtMs;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $updatedAtMs;
    protected $_name = [
        'createdAtMs' => 'CreatedAtMs',
        'error' => 'Error',
        'operation' => 'Operation',
        'result' => 'Result',
        'state' => 'State',
        'taskId' => 'TaskId',
        'updatedAtMs' => 'UpdatedAtMs',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAtMs) {
            $res['CreatedAtMs'] = $this->createdAtMs;
        }

        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['Result'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->updatedAtMs) {
            $res['UpdatedAtMs'] = $this->updatedAtMs;
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
        if (isset($map['CreatedAtMs'])) {
            $model->createdAtMs = $map['CreatedAtMs'];
        }

        if (isset($map['Error'])) {
            $model->error = error::fromMap($map['Error']);
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                foreach ($map['Result'] as $key1 => $value1) {
                    $model->result[$key1] = $value1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UpdatedAtMs'])) {
            $model->updatedAtMs = $map['UpdatedAtMs'];
        }

        return $model;
    }
}
