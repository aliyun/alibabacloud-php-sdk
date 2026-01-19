<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DisableCloudAccountRoleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountRoleId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountRoleId' => 'CloudAccountRoleId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountRoleId) {
            $res['CloudAccountRoleId'] = $this->cloudAccountRoleId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountRoleId'])) {
            $model->cloudAccountRoleId = $map['CloudAccountRoleId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
