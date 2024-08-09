<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Edge extends Model
{
    /**
     * @var Relation[]
     */
    public $columnLineage;

    /**
     * @var Relation[]
     */
    public $tableLineage;
    protected $_name = [
        'columnLineage' => 'columnLineage',
        'tableLineage'  => 'tableLineage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnLineage) {
            $res['columnLineage'] = [];
            if (null !== $this->columnLineage && \is_array($this->columnLineage)) {
                $n = 0;
                foreach ($this->columnLineage as $item) {
                    $res['columnLineage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableLineage) {
            $res['tableLineage'] = [];
            if (null !== $this->tableLineage && \is_array($this->tableLineage)) {
                $n = 0;
                foreach ($this->tableLineage as $item) {
                    $res['tableLineage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Edge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columnLineage'])) {
            if (!empty($map['columnLineage'])) {
                $model->columnLineage = [];
                $n                    = 0;
                foreach ($map['columnLineage'] as $item) {
                    $model->columnLineage[$n++] = null !== $item ? Relation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tableLineage'])) {
            if (!empty($map['tableLineage'])) {
                $model->tableLineage = [];
                $n                   = 0;
                foreach ($map['tableLineage'] as $item) {
                    $model->tableLineage[$n++] = null !== $item ? Relation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
