<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpGroup extends Model
{
    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example online_paycore
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @example 121.41.106.33,100.104.7.0/26
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

        return $model;
    }
}
