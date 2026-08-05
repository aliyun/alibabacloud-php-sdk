<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class sink extends Model
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
        'name' => 'Name',
        'parameters' => 'Parameters',
        'primaryKey' => 'PrimaryKey',
        'schema' => 'Schema',
        'type' => 'Type',
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
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['Schema'] = [];
                $n1 = 0;
                foreach ($this->schema as $item1) {
                    if (\is_array($item1)) {
                        $res['Schema'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Schema'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['Schema'])) {
            if (!empty($map['Schema'])) {
                $model->schema = [];
                $n1 = 0;
                foreach ($map['Schema'] as $item1) {
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
