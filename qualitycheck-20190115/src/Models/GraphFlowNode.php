<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode\nextNodes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode\properties;

class GraphFlowNode extends Model
{
    /**
     * @var ConditionBasicInfo[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var nextNodes[]
     */
    public $nextNodes;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var bool
     */
    public $useConditions;
    protected $_name = [
        'conditions' => 'Conditions',
        'content' => 'Content',
        'id' => 'Id',
        'index' => 'Index',
        'name' => 'Name',
        'nextNodes' => 'NextNodes',
        'nodeType' => 'NodeType',
        'properties' => 'Properties',
        'rid' => 'Rid',
        'useConditions' => 'UseConditions',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->nextNodes)) {
            Model::validateArray($this->nextNodes);
        }
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextNodes) {
            if (\is_array($this->nextNodes)) {
                $res['NextNodes'] = [];
                $n1 = 0;
                foreach ($this->nextNodes as $item1) {
                    $res['NextNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->useConditions) {
            $res['UseConditions'] = $this->useConditions;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = ConditionBasicInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextNodes'])) {
            if (!empty($map['NextNodes'])) {
                $model->nextNodes = [];
                $n1 = 0;
                foreach ($map['NextNodes'] as $item1) {
                    $model->nextNodes[$n1] = nextNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['UseConditions'])) {
            $model->useConditions = $map['UseConditions'];
        }

        return $model;
    }
}
