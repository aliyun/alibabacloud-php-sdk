<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class KillProcessListRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The list of the sessions that need to be closed.
     *
     * This parameter is required.
     * @example [{"ServerIp":"192.168.13.119","SessionId":"3221614618"}]
     *
     * @var string
     */
    public $sessionList;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'sessionList' => 'SessionList',
        'tenantId'    => 'TenantId',
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
        if (null !== $this->sessionList) {
            $res['SessionList'] = $this->sessionList;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KillProcessListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SessionList'])) {
            $model->sessionList = $map['SessionList'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
