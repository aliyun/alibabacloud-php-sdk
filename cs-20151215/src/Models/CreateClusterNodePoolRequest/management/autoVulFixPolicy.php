<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoVulFixPolicy extends Model
{
    /**
     * @description Specifies whether to allow node restart. This parameter takes effect only if `auto_vul_fix` is set to true. Valid values:
     *
     *   `true`
     *   `false` If `auto_vul_fix` is set to true, the default value of this parameter is `false`. If `auto_vul_fix` is set to false, the default value of this parameter is `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $restartNode;

    /**
     * @description The level of CVEs that can be automatically patched. Separate multiple levels with commas (,). Example: `asap,later`. Valid values:
     *
     *   `asap`: high
     *   `later`: medium
     *   `nntf`: low
     *
     * If `auto_vul_fix` is set to true, the default value of this parameter is `asap`.
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
