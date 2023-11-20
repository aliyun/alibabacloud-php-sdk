<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;

use AlibabaCloud\Tea\Model;

class autoVulFixPolicy extends Model
{
    /**
     * @description 是否允许重启节点。
     *
     * @example true
     *
     * @var bool
     */
    public $restartNode;

    /**
     * @description 允许自动修复的漏洞级别，以逗号分隔。
     *
     * @example asap,nntf
     *
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'restartNode' => 'restart_node',
        'vulLevel'    => 'vul_level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restartNode) {
            $res['restart_node'] = $this->restartNode;
        }
        if (null !== $this->vulLevel) {
            $res['vul_level'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoVulFixPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['restart_node'])) {
            $model->restartNode = $map['restart_node'];
        }
        if (isset($map['vul_level'])) {
            $model->vulLevel = $map['vul_level'];
        }

        return $model;
    }
}
