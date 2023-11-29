<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantSecurityIpGroupResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpGroup extends Model
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
     * @example paytest
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @description The list of IP addresses in the IP address whitelist group.
     *
     * It is a string separated by commas, and each object is an IP address or CIDR block.
     * @example 192.***.*.*
     *
     * @var string
     */
    public $securityIps;

    /**
     * @description The ID of the tenant.
     *
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIps'         => 'SecurityIps',
        'tenantId'            => 'TenantId',
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpGroup
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
