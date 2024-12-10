<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterVipRequest extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @var string
     */
    public $connectString;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-2ze8mbuai97*****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The VPC ID.
     *
     * >
     *
     *   The new **VPC** must reside in the same region as the cluster.
     *
     * This parameter is required.
     * @example vpc-bp1at5ze0t5u3xtqn****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID.
     *
     * >
     *
     *   The new vSwitch must reside in the same zone as the cluster.
     *
     * This parameter is required.
     * @example vsw-bp1aadw9k19x6cis9****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectString' => 'ConnectString',
        'DBClusterId'   => 'DBClusterId',
        'VPCId'         => 'VPCId',
        'vSwitchId'     => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterVipRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
