<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest\queryNode;

class CreateClusterRequest extends Model
{
    /**
     * @var bool
     */
    public $autoLoad;

    /**
     * @var dataNode
     */
    public $dataNode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var queryNode
     */
    public $queryNode;
    protected $_name = [
        'autoLoad' => 'autoLoad',
        'dataNode' => 'dataNode',
        'description' => 'description',
        'name' => 'name',
        'queryNode' => 'queryNode',
    ];

    public function validate()
    {
        if (null !== $this->dataNode) {
            $this->dataNode->validate();
        }
        if (null !== $this->queryNode) {
            $this->queryNode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoLoad) {
            $res['autoLoad'] = $this->autoLoad;
        }

        if (null !== $this->dataNode) {
            $res['dataNode'] = null !== $this->dataNode ? $this->dataNode->toArray($noStream) : $this->dataNode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toArray($noStream) : $this->queryNode;
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
        if (isset($map['autoLoad'])) {
            $model->autoLoad = $map['autoLoad'];
        }

        if (isset($map['dataNode'])) {
            $model->dataNode = dataNode::fromMap($map['dataNode']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['queryNode'])) {
            $model->queryNode = queryNode::fromMap($map['queryNode']);
        }

        return $model;
    }
}
