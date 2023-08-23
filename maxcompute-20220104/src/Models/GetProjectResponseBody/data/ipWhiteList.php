<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class ipWhiteList extends Model
{
    /**
     * @description The list of IP addresses.
     *
     * @example 10.88.111.3
     *
     * @var string
     */
    public $ipList;

    /**
     * @description The list of virtual private cloud (VPC) IP addresses.
     *
     * @example 10.88.111.3
     *
     * @var string
     */
    public $vpcIpList;
    protected $_name = [
        'ipList'    => 'ipList',
        'vpcIpList' => 'vpcIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['ipList'] = $this->ipList;
        }
        if (null !== $this->vpcIpList) {
            $res['vpcIpList'] = $this->vpcIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipWhiteList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipList'])) {
            $model->ipList = $map['ipList'];
        }
        if (isset($map['vpcIpList'])) {
            $model->vpcIpList = $map['vpcIpList'];
        }

        return $model;
    }
}
