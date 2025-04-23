<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody\result\primaryKey;

class result extends Model
{
    /**
     * @var bool
     */
    public $addIndex;

    /**
     * @var bool
     */
    public $attribute;

    /**
     * @var bool
     */
    public $custom;

    /**
     * @var string
     */
    public $name;

    /**
     * @var primaryKey
     */
    public $primaryKey;

    /**
     * @var bool
     */
    public $summary;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'addIndex' => 'addIndex',
        'attribute' => 'attribute',
        'custom' => 'custom',
        'name' => 'name',
        'primaryKey' => 'primaryKey',
        'summary' => 'summary',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->primaryKey) {
            $this->primaryKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addIndex) {
            $res['addIndex'] = $this->addIndex;
        }

        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->primaryKey) {
            $res['primaryKey'] = null !== $this->primaryKey ? $this->primaryKey->toArray($noStream) : $this->primaryKey;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['addIndex'])) {
            $model->addIndex = $map['addIndex'];
        }

        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['primaryKey'])) {
            $model->primaryKey = primaryKey::fromMap($map['primaryKey']);
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
