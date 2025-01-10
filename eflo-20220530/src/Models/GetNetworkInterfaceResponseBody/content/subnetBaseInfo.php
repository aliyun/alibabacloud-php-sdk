<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content;

use AlibabaCloud\Tea\Model;

class subnetBaseInfo extends Model
{
    /**
     * @description Network address segment
     *
     * @example 116.233.21.57/32
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the data address was created.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the Subnet instance.
     *
     * @example subnet-urb01blo
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
