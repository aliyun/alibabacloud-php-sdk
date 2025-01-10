<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data;

use AlibabaCloud\Tea\Model;

class vpdBaseInfo extends Model
{
    /**
     * @description The CIDR block of the VPD.
     *
     *   We recommend that you use an RFC private endpoint as the Lingjun CIDR block, such as 10.0.0.0/8,172.16.0.0/12,192.168.0.0/16. In scenarios where the Doringjun CIDR block is connected to each other or where the Lingjun CIDR block is connected to a VPC, make sure that the addresses do not conflict with each other.
     *   You can also use a custom CIDR block other than 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 and their subnets as the primary IPv4 CIDR block of the VPD.
     *
     * @example 10.0.0.0/13
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the data address was created.
     *
     * @example 1668158213000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-9n7ioqrp
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description Lingjun CIDR block instance name
     *
     * @example yzp-rg-test3
     *
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr'       => 'Cidr',
        'createTime' => 'CreateTime',
        'vpdId'      => 'VpdId',
        'vpdName'    => 'VpdName',
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
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpdBaseInfo
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
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
