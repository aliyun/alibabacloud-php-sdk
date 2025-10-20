<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ViewSchema extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $dialects;

    /**
     * @var DataField[]
     */
    public $fields;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'comment' => 'comment',
        'dialects' => 'dialects',
        'fields' => 'fields',
        'options' => 'options',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->dialects)) {
            Model::validateArray($this->dialects);
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->dialects) {
            if (\is_array($this->dialects)) {
                $res['dialects'] = [];
                foreach ($this->dialects as $key1 => $value1) {
                    $res['dialects'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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

        if (isset($map['dialects'])) {
            if (!empty($map['dialects'])) {
                $model->dialects = [];
                foreach ($map['dialects'] as $key1 => $value1) {
                    $model->dialects[$key1] = $value1;
                }
            }
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = DataField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
