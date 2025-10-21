<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class AiModel extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var Schema
     */
    public $inputSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var Schema
     */
    public $outputSchema;
    protected $_name = [
        'comment' => 'comment',
        'inputSchema' => 'inputSchema',
        'name' => 'name',
        'options' => 'options',
        'outputSchema' => 'outputSchema',
    ];

    public function validate()
    {
        if (null !== $this->inputSchema) {
            $this->inputSchema->validate();
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (null !== $this->outputSchema) {
            $this->outputSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->inputSchema) {
            $res['inputSchema'] = null !== $this->inputSchema ? $this->inputSchema->toArray($noStream) : $this->inputSchema;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->outputSchema) {
            $res['outputSchema'] = null !== $this->outputSchema ? $this->outputSchema->toArray($noStream) : $this->outputSchema;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['inputSchema'])) {
            $model->inputSchema = Schema::fromMap($map['inputSchema']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['outputSchema'])) {
            $model->outputSchema = Schema::fromMap($map['outputSchema']);
        }

        return $model;
    }
}
