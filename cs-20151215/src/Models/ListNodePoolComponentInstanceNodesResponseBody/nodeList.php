<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesResponseBody\nodeList\component;

class nodeList extends Model
{
    /**
     * @var component
     */
    public $component;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'component' => 'component',
        'instanceId' => 'instance_id',
        'nodeName' => 'node_name',
    ];

    public function validate()
    {
        if (null !== $this->component) {
            $this->component->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            $res['component'] = null !== $this->component ? $this->component->toArray($noStream) : $this->component;
        }

        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        if (null !== $this->nodeName) {
            $res['node_name'] = $this->nodeName;
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
        if (isset($map['component'])) {
            $model->component = component::fromMap($map['component']);
        }

        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        if (isset($map['node_name'])) {
            $model->nodeName = $map['node_name'];
        }

        return $model;
    }
}
