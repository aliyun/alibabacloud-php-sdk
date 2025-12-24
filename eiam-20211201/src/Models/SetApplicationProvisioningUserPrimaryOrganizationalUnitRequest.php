<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SetApplicationProvisioningUserPrimaryOrganizationalUnitRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userPrimaryOrganizationalUnitId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId' => 'InstanceId',
        'userPrimaryOrganizationalUnitId' => 'UserPrimaryOrganizationalUnitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->userPrimaryOrganizationalUnitId) {
            $res['UserPrimaryOrganizationalUnitId'] = $this->userPrimaryOrganizationalUnitId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UserPrimaryOrganizationalUnitId'])) {
            $model->userPrimaryOrganizationalUnitId = $map['UserPrimaryOrganizationalUnitId'];
        }

        return $model;
    }
}
