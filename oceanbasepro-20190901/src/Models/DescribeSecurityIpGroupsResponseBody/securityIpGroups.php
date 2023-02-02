<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpGroups extends Model
{
    /**
     * @description The name of the security group.
     *
     * @example online_paycore
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @description The list of IP addresses and CIDR blocks in the whitelist.
     * It is a JSON array. Each object in the array is an IP address or CIDR block.
     * @example {“127.0.0.1”, ”123.123.1.23“}
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIps'         => 'SecurityIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIpGroupName) {
            $res['SecurityIpGroupName'] = $this->securityIpGroupName;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIpGroupName'])) {
            $model->securityIpGroupName = $map['SecurityIpGroupName'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
