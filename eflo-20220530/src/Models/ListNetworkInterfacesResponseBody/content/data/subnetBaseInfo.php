<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content\data;

use AlibabaCloud\Tea\Model;

class subnetBaseInfo extends Model
{
    /**
     * @description The network segment of the Subnet.
     *
     *   The network segment of the subnet must be a proper subset of the network segment of Lingjun to which it belongs, and the mask must be between 16 bits and 29 bits, which can provide 8 to 65536 addresses. For example, the CIDR block of the Lingjun CIDR block is 192.168.0.0/16, and the CIDR blocks of the subnets under the Lingjun CIDR block are 192.168.0.0/17 to 192.168.0.0/29.
     *   The first and last three IP addresses of each subnet segment are reserved by the system. For example, the CIDR blocks of the subnet are 192.168.1.0/24,192.168.1.0, 192.168.1.253, 192.168.1.254, and 192.168.1.255.
     *
     * This parameter is left empty by default.
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the activation code was created.
     *
     * @example 1623656472000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the Subnet instance.
     *
     * @example subnet-yjnqn5ef
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The name of the Subnet instance.
     *
     * @example subnet-1
     *
     * @var string
     */
    public $subnetName;
    protected $_name = [
        'cidr'       => 'Cidr',
        'createTime' => 'CreateTime',
        'subnetId'   => 'SubnetId',
        'subnetName' => 'SubnetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subnetBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }

        return $model;
    }
}
