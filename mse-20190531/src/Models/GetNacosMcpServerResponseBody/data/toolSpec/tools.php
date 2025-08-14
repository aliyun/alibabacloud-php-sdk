<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\toolSpec;

use AlibabaCloud\Dara\Model;

class tools extends Model
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
        'description' => 'Description',
        'inputSchema' => 'InputSchema',
        'name' => 'Name',
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
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputSchema) {
            if (\is_array($this->inputSchema)) {
                $res['InputSchema'] = [];
                foreach ($this->inputSchema as $key1 => $value1) {
                    $res['InputSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InputSchema'])) {
            if (!empty($map['InputSchema'])) {
                $model->inputSchema = [];
                foreach ($map['InputSchema'] as $key1 => $value1) {
                    $model->inputSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
