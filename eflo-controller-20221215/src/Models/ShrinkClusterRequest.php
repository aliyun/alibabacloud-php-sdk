<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest\nodeGroups;

class ShrinkClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var bool
     */
    public $ignoreFailedNodeTasks;
    /**
     * @var nodeGroups[]
     */
    public $nodeGroups;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodeGroups'            => 'NodeGroups',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroups)) {
            Model::validateArray($this->nodeGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1                = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }

        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n1                = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1++] = nodeGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
