<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ShrinkClusterShrinkRequest extends Model
{
    /**
     * @example i15dfa12e8f27c44f4a006c2c8bb
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @var string
     */
    public $nodeGroupsShrink;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodeGroupsShrink'      => 'NodeGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->nodeGroupsShrink) {
            $res['NodeGroups'] = $this->nodeGroupsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShrinkClusterShrinkRequest
     */
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
            $model->nodeGroupsShrink = $map['NodeGroups'];
        }

        return $model;
    }
}
