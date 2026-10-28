<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\toolCalls\function_;

class toolCalls extends Model
{
    /**
     * @var string
     */
    public $encryptedValue;

    /**
     * @var function_
     */
    public $function;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'encryptedValue' => 'encryptedValue',
        'function' => 'function',
        'id' => 'id',
        'metadata' => 'metadata',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->function) {
            $this->function->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedValue) {
            $res['encryptedValue'] = $this->encryptedValue;
        }

        if (null !== $this->function) {
            $res['function'] = null !== $this->function ? $this->function->toArray($noStream) : $this->function;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
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
        if (isset($map['encryptedValue'])) {
            $model->encryptedValue = $map['encryptedValue'];
        }

        if (isset($map['function'])) {
            $model->function = function_::fromMap($map['function']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
