<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecurityIpGroupRequest extends Model
{
    /**
     * @description The name of the IP address whitelist group.
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The information of the deleted IP whitelist group.
     *
     * This parameter is required.
     * @example paytest
     *
     * @var string
     */
    public $securityIpGroupName;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'securityIpGroupName' => 'SecurityIpGroupName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecurityIpGroupRequest
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

        return $model;
    }
}
