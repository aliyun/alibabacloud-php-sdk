<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models;

use AlibabaCloud\Tea\Model;

class DataStreamMapping extends Model
{
    /**
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var bool
     */
    public $docValues;

    /**
     * @var bool
     */
    public $index;

    /**
     * @var string
     */
    public $key;

    /**
     * @var \AlibabaCloud\SDK\Esserverless\V20220822\Models\DataStreamMapping[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $tokenizeOnChars;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'caseSensitive'   => 'caseSensitive',
        'docValues'       => 'docValues',
        'index'           => 'index',
        'key'             => 'key',
        'properties'      => 'properties',
        'tokenizeOnChars' => 'tokenizeOnChars',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }
        if (null !== $this->docValues) {
            $res['docValues'] = $this->docValues;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->properties) {
            $res['properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tokenizeOnChars) {
            $res['tokenizeOnChars'] = $this->tokenizeOnChars;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataStreamMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }
        if (isset($map['docValues'])) {
            $model->docValues = $map['docValues'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                $n                 = 0;
                foreach ($map['properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tokenizeOnChars'])) {
            if (!empty($map['tokenizeOnChars'])) {
                $model->tokenizeOnChars = $map['tokenizeOnChars'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
