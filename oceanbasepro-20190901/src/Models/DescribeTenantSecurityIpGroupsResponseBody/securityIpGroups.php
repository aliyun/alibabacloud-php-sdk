<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityIpGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class securityIpGroups extends Model
{
    /**
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @var string
     */
    public $securityIpGroupType;

    /**
     * @var string
     */
    public $securityIps;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIpGroupType' => 'SecurityIpGroupType',
        'securityIps' => 'SecurityIps',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
