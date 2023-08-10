<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema\indexes;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema\indexSortConfig;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema\ttlField;
use AlibabaCloud\Tea\Model;

class Schema extends Model
{
    /**
     * @var indexSortConfig[]
     */
    public $indexSortConfig;

    /**
     * @var indexes
     */
    public $indexes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $routeField;

    /**
     * @var string[]
     */
    public $routeFieldValues;

    /**
     * @var string
     */
    public $secondRouteField;

    /**
     * @var SchemaTablesValue[]
     */
    public $tables;

    /**
     * @var ttlField
     */
    public $ttlField;
    protected $_name = [
        'indexSortConfig'  => 'indexSortConfig',
        'indexes'          => 'indexes',
        'name'             => 'name',
        'routeField'       => 'routeField',
        'routeFieldValues' => 'routeFieldValues',
        'secondRouteField' => 'secondRouteField',
        'tables'           => 'tables',
        'ttlField'         => 'ttlField',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexSortConfig) {
            $res['indexSortConfig'] = [];
            if (null !== $this->indexSortConfig && \is_array($this->indexSortConfig)) {
                $n = 0;
                foreach ($this->indexSortConfig as $item) {
                    $res['indexSortConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->indexes) {
            $res['indexes'] = null !== $this->indexes ? $this->indexes->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->routeField) {
            $res['routeField'] = $this->routeField;
        }
        if (null !== $this->routeFieldValues) {
            $res['routeFieldValues'] = $this->routeFieldValues;
        }
        if (null !== $this->secondRouteField) {
            $res['secondRouteField'] = $this->secondRouteField;
        }
        if (null !== $this->tables) {
            $res['tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                foreach ($this->tables as $key => $val) {
                    $res['tables'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->ttlField) {
            $res['ttlField'] = null !== $this->ttlField ? $this->ttlField->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Schema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexSortConfig'])) {
            if (!empty($map['indexSortConfig'])) {
                $model->indexSortConfig = [];
                $n                      = 0;
                foreach ($map['indexSortConfig'] as $item) {
                    $model->indexSortConfig[$n++] = null !== $item ? indexSortConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['indexes'])) {
            $model->indexes = indexes::fromMap($map['indexes']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['routeField'])) {
            $model->routeField = $map['routeField'];
        }
        if (isset($map['routeFieldValues'])) {
            if (!empty($map['routeFieldValues'])) {
                $model->routeFieldValues = $map['routeFieldValues'];
            }
        }
        if (isset($map['secondRouteField'])) {
            $model->secondRouteField = $map['secondRouteField'];
        }
        if (isset($map['tables'])) {
            $model->tables = $map['tables'];
        }
        if (isset($map['ttlField'])) {
            $model->ttlField = ttlField::fromMap($map['ttlField']);
        }

        return $model;
    }
}
