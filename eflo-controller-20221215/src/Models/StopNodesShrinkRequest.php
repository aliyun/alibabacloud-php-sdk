<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class StopNodesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $ignoreFailedNodeTasks;
    /**
     * @var string
     */
    public $nodesShrink;
    protected $_name = [
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodesShrink'           => 'Nodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }

        if (null !== $this->nodesShrink) {
            $res['Nodes'] = $this->nodesShrink;
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
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }

        if (isset($map['Nodes'])) {
            $model->nodesShrink = $map['Nodes'];
        }

        return $model;
    }
}
