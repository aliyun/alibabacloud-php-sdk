<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class BatchKillProcessListRequest extends Model
{
    /**
     * @var bool
     */
    public $byObSessionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sessionList;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'byObSessionId' => 'ByObSessionId',
        'instanceId' => 'InstanceId',
        'sessionList' => 'SessionList',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byObSessionId) {
            $res['ByObSessionId'] = $this->byObSessionId;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByObSessionId'])) {
            $model->byObSessionId = $map['ByObSessionId'];
        }

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
