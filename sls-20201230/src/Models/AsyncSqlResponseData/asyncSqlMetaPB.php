<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\AsyncSqlResponseData;

use AlibabaCloud\Dara\Model;

class asyncSqlMetaPB extends Model
{
    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var float
     */
    public $cpuSec;

    /**
     * @var int
     */
    public $elapsedMilli;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var int
     */
    public $processedRows;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $resultRows;
    protected $_name = [
        'cpuCores' => 'cpu_cores',
        'cpuSec' => 'cpu_sec',
        'elapsedMilli' => 'elapsed_milli',
        'keys' => 'keys',
        'processedRows' => 'processed_rows',
        'progress' => 'progress',
        'resultRows' => 'result_rows',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpu_cores'] = $this->cpuCores;
        }

        if (null !== $this->cpuSec) {
            $res['cpu_sec'] = $this->cpuSec;
        }

        if (null !== $this->elapsedMilli) {
            $res['elapsed_milli'] = $this->elapsedMilli;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processedRows) {
            $res['processed_rows'] = $this->processedRows;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->resultRows) {
            $res['result_rows'] = $this->resultRows;
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
        if (isset($map['cpu_cores'])) {
            $model->cpuCores = $map['cpu_cores'];
        }

        if (isset($map['cpu_sec'])) {
            $model->cpuSec = $map['cpu_sec'];
        }

        if (isset($map['elapsed_milli'])) {
            $model->elapsedMilli = $map['elapsed_milli'];
        }

        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['processed_rows'])) {
            $model->processedRows = $map['processed_rows'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['result_rows'])) {
            $model->resultRows = $map['result_rows'];
        }

        return $model;
    }
}
