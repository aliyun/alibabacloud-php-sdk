<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateSecurityIpGroupRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the whitelist group.
     *
     * @example pay_online
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @description The IP addresses or CIDR blocks in the IP address whitelist group.
     * - CIDR block: for example, 10.23.12.24/24, where 24 indicates the length of the prefix in the IP address, and the prefix is 1 to 30 characters in length.  Limit: You can set no more than 40 IP addresses or CIDR blocks for a whitelist group. A total of 200 IP addresses or CIDR blocks are supported for all whitelist groups.
     * @example {"192.168.1.1","192.168.0.0.1/8"}
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIps'         => 'SecurityIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
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
     * @return CreateSecurityIpGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecurityIpGroupName'])) {
            $model->securityIpGroupName = $map['SecurityIpGroupName'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
