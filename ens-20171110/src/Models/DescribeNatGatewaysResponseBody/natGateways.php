<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysResponseBody\natGateways\ipLists;
use AlibabaCloud\Tea\Model;

class natGateways extends Model
{
    /**
     * @description The time when the NAT gateway was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-11-22T07:03:32Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-xiangyang-5
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @var ipLists[]
     */
    public $ipLists;

    /**
     * @description The name of the NAT gateway.
     *
     * @example test0
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the network.
     *
     * @example n-5s2ml1olj0kzaws9n1yrj****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The type of the NAT gateway.
     *
     * @example enat.default
     *
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5szpp1os9m55myirbflfw****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'ensRegionId' => 'EnsRegionId',
        'ipLists' => 'IpLists',
        'name' => 'Name',
        'natGatewayId' => 'NatGatewayId',
        'networkId' => 'NetworkId',
        'spec' => 'Spec',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ipLists) {
            $res['IpLists'] = [];
            if (null !== $this->ipLists && \is_array($this->ipLists)) {
                $n = 0;
                foreach ($this->ipLists as $item) {
                    $res['IpLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['IpLists'])) {
            if (!empty($map['IpLists'])) {
                $model->ipLists = [];
                $n = 0;
                foreach ($map['IpLists'] as $item) {
                    $model->ipLists[$n++] = null !== $item ? ipLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
