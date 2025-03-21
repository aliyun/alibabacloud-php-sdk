<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description Hostname
     *
     * @example d044d220-33fd-11ed-86a6
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Login Password
     *
     * @example ***
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Node ID
     *
     * @example e01-cn-zvp2zdpy601
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description VSwitch ID
     *
     * @example vsw-bp169pi5fj151rrms4sia
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID
     *
     * @example vpc-0jlasms92fdxqd3wlf8ny
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'hostname' => 'Hostname',
        'loginPassword' => 'LoginPassword',
        'nodeId' => 'NodeId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
