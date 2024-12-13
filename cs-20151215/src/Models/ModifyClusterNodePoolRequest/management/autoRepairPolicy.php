<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoRepairPolicy extends Model
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
