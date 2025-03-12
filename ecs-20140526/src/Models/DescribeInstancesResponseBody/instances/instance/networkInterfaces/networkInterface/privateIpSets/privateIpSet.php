<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\privateIpSets;

use AlibabaCloud\Tea\Model;

class privateIpSet extends Model
{
    /**
     * @description Indicates whether the IP address is the primary private IP address. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $primary;

    /**
     * @description The private domain name of the instance.
     *
     * >  This parameter has a value in a specific format only if `HostnameType` is set to `IpBased` or `InstanceIdBased`.
     * @example dnsTestName
     *
     * @var string
     */
    public $privateDnsName;

    /**
     * @description The private IP address of the ENI.
     *
     * @example ``172.17.**.**``
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'primary'          => 'Primary',
        'privateDnsName'   => 'PrivateDnsName',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->privateDnsName) {
            $res['PrivateDnsName'] = $this->privateDnsName;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['PrivateDnsName'])) {
            $model->privateDnsName = $map['PrivateDnsName'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
