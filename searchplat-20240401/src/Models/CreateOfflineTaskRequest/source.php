<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateOfflineTaskRequest;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string[][]
     */
    public $schema;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'name',
        'parameters' => 'parameters',
        'primaryKey' => 'primaryKey',
        'schema' => 'schema',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['schema'] = [];
                $n1 = 0;
                foreach ($this->schema as $item1) {
                    if (\is_array($item1)) {
                        $res['schema'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['schema'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }

        if (isset($map['schema'])) {
            if (!empty($map['schema'])) {
                $model->schema = [];
                $n1 = 0;
                foreach ($map['schema'] as $item1) {
                    if (!empty($item1)) {
                        $model->schema[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->schema[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
