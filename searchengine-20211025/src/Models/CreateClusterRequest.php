<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest\queryNode;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic connection.
     *
     * @example true
     *
     * @var bool
     */
    public $autoLoad;

    /**
     * @description The details of the Searcher workers.
     *
     * @var dataNode
     */
    public $dataNode;

    /**
     * @description The description of the cluster.
     *
     * @example "ha-tets"
     *
     * @var string
     */
    public $description;

    /**
     * @description The cluster name.
     *
     * @example ha-cn-zvp2qr1sk01_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The details of the Query Result Searcher (QRS) workers.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoLoad) {
            $res['autoLoad'] = $this->autoLoad;
        }
        if (null !== $this->dataNode) {
            $res['dataNode'] = null !== $this->dataNode ? $this->dataNode->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
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
