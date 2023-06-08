<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityIpGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpGroups extends Model
{
    /**
     * @example test1
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @example tenant
     *
     * @var string
     */
    public $securityIpGroupType;

    /**
     * @example 192.***.*.*"
     *
     * @var string
     */
    public $securityIps;

    /**
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIpGroupType' => 'SecurityIpGroupType',
        'securityIps'         => 'SecurityIps',
        'tenantId'            => 'TenantId',
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
        if (null !== $this->securityIpGroupType) {
            $res['SecurityIpGroupType'] = $this->securityIpGroupType;
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
     * @return securityIpGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIpGroupName'])) {
            $model->securityIpGroupName = $map['SecurityIpGroupName'];
        }
        if (isset($map['SecurityIpGroupType'])) {
            $model->securityIpGroupType = $map['SecurityIpGroupType'];
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
