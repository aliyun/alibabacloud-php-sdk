<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result\schema\indexes;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result\schema\indexSortConfig;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result\schema\ttlField;

class schema extends Model
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
     * @var mixed[]
     */
    public $tables;

    /**
     * @var ttlField
     */
    public $ttlField;
    protected $_name = [
        'indexSortConfig' => 'indexSortConfig',
        'indexes' => 'indexes',
        'name' => 'name',
        'routeField' => 'routeField',
        'routeFieldValues' => 'routeFieldValues',
        'secondRouteField' => 'secondRouteField',
        'tables' => 'tables',
        'ttlField' => 'ttlField',
    ];

    public function validate()
    {
        if (\is_array($this->indexSortConfig)) {
            Model::validateArray($this->indexSortConfig);
        }
        if (null !== $this->indexes) {
            $this->indexes->validate();
        }
        if (\is_array($this->routeFieldValues)) {
            Model::validateArray($this->routeFieldValues);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (null !== $this->ttlField) {
            $this->ttlField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexSortConfig) {
            if (\is_array($this->indexSortConfig)) {
                $res['indexSortConfig'] = [];
                $n1 = 0;
                foreach ($this->indexSortConfig as $item1) {
                    $res['indexSortConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexes) {
            $res['indexes'] = null !== $this->indexes ? $this->indexes->toArray($noStream) : $this->indexes;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->routeField) {
            $res['routeField'] = $this->routeField;
        }

        if (null !== $this->routeFieldValues) {
            if (\is_array($this->routeFieldValues)) {
                $res['routeFieldValues'] = [];
                $n1 = 0;
                foreach ($this->routeFieldValues as $item1) {
                    $res['routeFieldValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secondRouteField) {
            $res['secondRouteField'] = $this->secondRouteField;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                foreach ($this->tables as $key1 => $value1) {
                    $res['tables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ttlField) {
            $res['ttlField'] = null !== $this->ttlField ? $this->ttlField->toArray($noStream) : $this->ttlField;
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
        if (isset($map['indexSortConfig'])) {
            if (!empty($map['indexSortConfig'])) {
                $model->indexSortConfig = [];
                $n1 = 0;
                foreach ($map['indexSortConfig'] as $item1) {
                    $model->indexSortConfig[$n1] = indexSortConfig::fromMap($item1);
                    ++$n1;
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
                $model->routeFieldValues = [];
                $n1 = 0;
                foreach ($map['routeFieldValues'] as $item1) {
                    $model->routeFieldValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['secondRouteField'])) {
            $model->secondRouteField = $map['secondRouteField'];
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                foreach ($map['tables'] as $key1 => $value1) {
                    $model->tables[$key1] = $value1;
                }
            }
        }

        if (isset($map['ttlField'])) {
            $model->ttlField = ttlField::fromMap($map['ttlField']);
        }

        return $model;
    }
}
