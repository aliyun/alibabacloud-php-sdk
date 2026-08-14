<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class DetachProjectManagersFromProjectAuthorizationRequest extends Model
{
    /**
     * @var int
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $principalIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'instanceId' => 'InstanceId',
        'principalIds' => 'PrincipalIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->principalIds) {
            $res['PrincipalIds'] = $this->principalIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrincipalIds'])) {
            $model->principalIds = $map['PrincipalIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
