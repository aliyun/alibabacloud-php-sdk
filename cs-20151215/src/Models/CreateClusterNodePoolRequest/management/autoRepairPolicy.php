<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoRepairPolicy extends Model
{
    /**
     * @description Specifies whether to allow node restart. This parameter takes effect only if you set `auto_repair` to true. Valid values:
     *
     *   `true`: allows node restart.
     *   `false`: does not allow node restart.
     *
     * When `auto_repair` is set to true, the default value of this parameter is `true`. When `auto_repair` is set to false, the default value of this parameter is `false`.
     * @example true
     *
     * @var bool
     */
    public $restartNode;
    protected $_name = [
        'restartNode' => 'restart_node',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRepairPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['restart_node'])) {
            $model->restartNode = $map['restart_node'];
        }

        return $model;
    }
}
