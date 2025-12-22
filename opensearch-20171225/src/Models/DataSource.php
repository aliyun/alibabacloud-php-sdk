<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class DataSource extends Model
{
    /**
     * @var string[][]
     */
    public $fields;

    /**
     * @var string
     */
    public $keyField;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var DataSourcePluginsValue[]
     */
    public $plugins;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fields' => 'fields',
        'keyField' => 'keyField',
        'parameters' => 'parameters',
        'plugins' => 'plugins',
        'schemaName' => 'schemaName',
        'tableName' => 'tableName',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->plugins)) {
            Model::validateArray($this->plugins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    if (\is_array($item1)) {
                        $res['fields'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['fields'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyField) {
            $res['keyField'] = $this->keyField;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->plugins) {
            if (\is_array($this->plugins)) {
                $res['plugins'] = [];
                foreach ($this->plugins as $key1 => $value1) {
                    $res['plugins'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    if (!empty($item1)) {
                        $model->fields[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->fields[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['keyField'])) {
            $model->keyField = $map['keyField'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['plugins'])) {
            if (!empty($map['plugins'])) {
                $model->plugins = [];
                foreach ($map['plugins'] as $key1 => $value1) {
                    $model->plugins[$key1] = DataSourcePluginsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
