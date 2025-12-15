<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerRequest\docs;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerRequest\query;

class GetMultiModalRerankerRequest extends Model
{
    /**
     * @var docs[]
     */
    public $docs;

    /**
     * @var mixed[]
     */
    public $options;

    /**
     * @var query
     */
    public $query;
    protected $_name = [
        'docs' => 'docs',
        'options' => 'options',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->docs)) {
            Model::validateArray($this->docs);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (null !== $this->query) {
            $this->query->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docs) {
            if (\is_array($this->docs)) {
                $res['docs'] = [];
                $n1 = 0;
                foreach ($this->docs as $item1) {
                    $res['docs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
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
        if (isset($map['docs'])) {
            if (!empty($map['docs'])) {
                $model->docs = [];
                $n1 = 0;
                foreach ($map['docs'] as $item1) {
                    $model->docs[$n1] = docs::fromMap($item1);
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
            $model->query = query::fromMap($map['query']);
        }

        return $model;
    }
}
