<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;

use AlibabaCloud\Tea\Model;

class autoVulFixPolicy extends Model
{
    /**
     * @description Indicates whether node restart is allowed.
     *
     * @example true
     *
     * @var bool
     */
    public $restartNode;

    /**
     * @description The severity level of CVEs that can be automatically patched. Multiple severity levels are separated by commas (,).
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
