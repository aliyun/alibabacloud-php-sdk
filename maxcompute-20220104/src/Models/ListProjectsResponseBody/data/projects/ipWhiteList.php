<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\Tea\Model;

class ipWhiteList extends Model
{
    /**
     * @description The IP address whitelist for access over the Internet or the network for interconnecting with other Alibaba Cloud services.
     *
     * >  If you configure only the IP address whitelist for access over the Internet or the network for interconnecting with other Alibaba Cloud services, the access over the Internet or the network for interconnecting with other Alibaba Cloud services is subject to configurations, and access over a virtual private cloud (VPC) is not allowed.
     *
     * @example 10.88.111.3
     *
     * @var string
     */
    public $ipList;

    /**
     * @description The IP address whitelist for access over a VPC.
     *
     * >  If you configure only the IP address whitelist for access over a VPC, the access over a VPC is subject to configurations, and the access over the Internet or the network for interconnecting with other Alibaba Cloud services is not allowed.
     *
     * @example 10.88.111.3
     *
     * @var string
     */
    public $vpcIpList;
    protected $_name = [
        'ipList' => 'ipList',
        'vpcIpList' => 'vpcIpList',
    ];

    public function validate() {}

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
