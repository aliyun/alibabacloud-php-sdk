<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryResponseBody\meta;

class ExecuteQueryResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $columnTypes;

    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $rows;
    protected $_name = [
        'columnTypes' => 'columnTypes',
        'columns' => 'columns',
        'meta' => 'meta',
        'requestId' => 'requestId',
        'rows' => 'rows',
    ];

    public function validate()
    {
        if (\is_array($this->columnTypes)) {
            Model::validateArray($this->columnTypes);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnTypes) {
            if (\is_array($this->columnTypes)) {
                $res['columnTypes'] = [];
                $n1 = 0;
                foreach ($this->columnTypes as $item1) {
                    $res['columnTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    if (\is_array($item1)) {
                        $res['rows'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['rows'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['columnTypes'])) {
            if (!empty($map['columnTypes'])) {
                $model->columnTypes = [];
                $n1 = 0;
                foreach ($map['columnTypes'] as $item1) {
                    $model->columnTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rows'])) {
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['rows'] as $item1) {
                    if (!empty($item1)) {
                        $model->rows[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->rows[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
