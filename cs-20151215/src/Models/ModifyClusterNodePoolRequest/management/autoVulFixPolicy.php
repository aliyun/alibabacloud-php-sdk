<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoVulFixPolicy extends Model
{
    /**
     * @description Specifies whether ACK is allowed to automatically restart nodes after repairing the nodes. Valid values:
     *
     *   `true`: yes.
     *   `false`: no.
     *
     * @example true
     *
     * @var bool
     */
    public $restartNode;

    /**
     * @description The severity levels of CVEs that can be automatically patched. Separate multiple levels with commas (,). Example: `asap,later`. Valid values:
     *
     *   `asap`: high.
     *   `later`: medium.
     *   `nntf`: low.
     *
     * If `auto_vul_fix=true` is specified, the default value is `asap`.
     *
     * @example asap,nntf
     *
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'restartNode' => 'restart_node',
        'vulLevel' => 'vul_level',
    ];

    public function validate() {}

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
