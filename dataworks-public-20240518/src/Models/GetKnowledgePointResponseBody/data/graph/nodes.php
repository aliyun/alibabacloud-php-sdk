<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string[]
     */
    public $aliases;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliases' => 'Aliases',
        'definition' => 'Definition',
        'description' => 'Description',
        'entityId' => 'EntityId',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->aliases)) {
            Model::validateArray($this->aliases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliases) {
            if (\is_array($this->aliases)) {
                $res['Aliases'] = [];
                $n1 = 0;
                foreach ($this->aliases as $item1) {
                    $res['Aliases'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Aliases'])) {
            if (!empty($map['Aliases'])) {
                $model->aliases = [];
                $n1 = 0;
                foreach ($map['Aliases'] as $item1) {
                    $model->aliases[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
