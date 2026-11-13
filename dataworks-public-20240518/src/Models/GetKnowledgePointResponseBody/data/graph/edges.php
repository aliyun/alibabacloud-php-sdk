<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\edges\join;

class edges extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edgeId;

    /**
     * @var string
     */
    public $fromNodeId;

    /**
     * @var join
     */
    public $join;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $toNodeId;
    protected $_name = [
        'description' => 'Description',
        'edgeId' => 'EdgeId',
        'fromNodeId' => 'FromNodeId',
        'join' => 'Join',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'relationType' => 'RelationType',
        'toNodeId' => 'ToNodeId',
    ];

    public function validate()
    {
        if (null !== $this->join) {
            $this->join->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->edgeId) {
            $res['EdgeId'] = $this->edgeId;
        }

        if (null !== $this->fromNodeId) {
            $res['FromNodeId'] = $this->fromNodeId;
        }

        if (null !== $this->join) {
            $res['Join'] = null !== $this->join ? $this->join->toArray($noStream) : $this->join;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->toNodeId) {
            $res['ToNodeId'] = $this->toNodeId;
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

        if (isset($map['EdgeId'])) {
            $model->edgeId = $map['EdgeId'];
        }

        if (isset($map['FromNodeId'])) {
            $model->fromNodeId = $map['FromNodeId'];
        }

        if (isset($map['Join'])) {
            $model->join = join::fromMap($map['Join']);
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['ToNodeId'])) {
            $model->toNodeId = $map['ToNodeId'];
        }

        return $model;
    }
}
