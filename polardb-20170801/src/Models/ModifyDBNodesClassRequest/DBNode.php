<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesClassRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The ID of the node.
     *
     * >  If you specify this parameter, DBNode.N.TargetClass is required. N is an integer that starts from 1. The maximum value of N is calculated by using the following formula:16 - The number of current nodes.
     * @example pi-*************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The specifications of the node that you want to change. For more information, see [Specifications of compute nodes](~~102542~~).
     *
     * >  If you specify this parameter, DBNode.N.DBNodeId is required. N is an integer that starts from 1. The maximum value of N is calculated by using the following formula:16 - The number of current nodes.
     * @example polar.mysql.x4.medium
     *
     * @var string
     */
    public $targetClass;
    protected $_name = [
        'DBNodeId'    => 'DBNodeId',
        'targetClass' => 'TargetClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->targetClass) {
            $res['TargetClass'] = $this->targetClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['TargetClass'])) {
            $model->targetClass = $map['TargetClass'];
        }

        return $model;
    }
}
