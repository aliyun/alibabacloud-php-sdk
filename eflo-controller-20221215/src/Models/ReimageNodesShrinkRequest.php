<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ReimageNodesShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i15dfa12e8f27c44f4a006c2c8bb
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to allow skipping failed nodes. Default value: False.
     *
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @description The nodes.
     *
     * @var string
     */
    public $nodesShrink;

    /**
     * @description The user data.
     *
     * @example #!/bin/sh
     * echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodesShrink' => 'Nodes',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->nodesShrink) {
            $res['Nodes'] = $this->nodesShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReimageNodesShrinkRequest
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
        if (isset($map['Nodes'])) {
            $model->nodesShrink = $map['Nodes'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
