<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode\nextNodes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode\properties;
use AlibabaCloud\Tea\Model;

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
        'conditions'    => 'Conditions',
        'content'       => 'Content',
        'id'            => 'Id',
        'index'         => 'Index',
        'name'          => 'Name',
        'nextNodes'     => 'NextNodes',
        'nodeType'      => 'NodeType',
        'properties'    => 'Properties',
        'rid'           => 'Rid',
        'useConditions' => 'UseConditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['NextNodes'] = [];
            if (null !== $this->nextNodes && \is_array($this->nextNodes)) {
                $n = 0;
                foreach ($this->nextNodes as $item) {
                    $res['NextNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->useConditions) {
            $res['UseConditions'] = $this->useConditions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GraphFlowNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? ConditionBasicInfo::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['NextNodes'] as $item) {
                    $model->nextNodes[$n++] = null !== $item ? nextNodes::fromMap($item) : $item;
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
