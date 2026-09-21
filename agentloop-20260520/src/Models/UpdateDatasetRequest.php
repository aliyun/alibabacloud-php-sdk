<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetRequest\renames;

class UpdateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var renames[]
     */
    public $renames;

    /**
     * @var IndexKey[]
     */
    public $schema;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'description' => 'description',
        'renames' => 'renames',
        'schema' => 'schema',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->renames)) {
            Model::validateArray($this->renames);
        }
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->renames) {
            if (\is_array($this->renames)) {
                $res['renames'] = [];
                $n1 = 0;
                foreach ($this->renames as $item1) {
                    $res['renames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['schema'] = [];
                foreach ($this->schema as $key1 => $value1) {
                    $res['schema'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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

        if (isset($map['renames'])) {
            if (!empty($map['renames'])) {
                $model->renames = [];
                $n1 = 0;
                foreach ($map['renames'] as $item1) {
                    $model->renames[$n1] = renames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['schema'])) {
            if (!empty($map['schema'])) {
                $model->schema = [];
                foreach ($map['schema'] as $key1 => $value1) {
                    $model->schema[$key1] = IndexKey::fromMap($value1);
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
