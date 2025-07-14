<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody\nodes;

use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @description The name of the network port for the node.
     *
     * @example bond0
     *
     * @var string
     */
    public $bondName;

    /**
     * @description The IP address of the node in the virtual private cloud (VPC).
     *
     * @example 192.168.22.2
     *
     * @var string
     */
    public $ip;

    /**
     * @description The subnet ID.
     *
     * @example subnet-fwekrvg9
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The VPC ID.
     *
     * @example vpd-eoiy88ju
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'bondName' => 'BondName',
        'ip' => 'Ip',
        'subnetId' => 'SubnetId',
        'vpdId' => 'VpdId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bondName) {
            $res['BondName'] = $this->bondName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BondName'])) {
            $model->bondName = $map['BondName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
