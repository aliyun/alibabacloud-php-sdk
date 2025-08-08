<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class MCPToolMeta extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $inputSchema;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'description',
        'inputSchema' => 'inputSchema',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->inputSchema)) {
            Model::validateArray($this->inputSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->inputSchema) {
            if (\is_array($this->inputSchema)) {
                $res['inputSchema'] = [];
                foreach ($this->inputSchema as $key1 => $value1) {
                    $res['inputSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['inputSchema'])) {
            if (!empty($map['inputSchema'])) {
                $model->inputSchema = [];
                foreach ($map['inputSchema'] as $key1 => $value1) {
                    $model->inputSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
