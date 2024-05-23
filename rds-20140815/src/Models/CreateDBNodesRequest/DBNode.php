<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The specification information of the node.
     *
     * This parameter is required.
     * @example mysql.n2.medium.xc
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The vSwitch ID of the node.
     *
     * @example vsw-bp1sxxsodv28ey5dl****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The ID of the zone in which the node is deployed.
     *
     * This parameter is required.
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'classCode',
        'vswitchId' => 'vswitchId',
        'zoneId'    => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['classCode'] = $this->classCode;
        }
        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['classCode'])) {
            $model->classCode = $map['classCode'];
        }
        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
