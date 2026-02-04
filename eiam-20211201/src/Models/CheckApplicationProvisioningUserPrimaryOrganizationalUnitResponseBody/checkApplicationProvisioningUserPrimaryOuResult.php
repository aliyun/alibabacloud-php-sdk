<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponseBody;

use AlibabaCloud\Dara\Model;

class checkApplicationProvisioningUserPrimaryOuResult extends Model
{
    /**
     * @var bool
     */
    public $allowAuthorization;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'allowAuthorization' => 'AllowAuthorization',
        'applicationId' => 'ApplicationId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAuthorization) {
            $res['AllowAuthorization'] = $this->allowAuthorization;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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
        if (isset($map['AllowAuthorization'])) {
            $model->allowAuthorization = $map['AllowAuthorization'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
