<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationFederatedCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $applicationFederatedCredentialId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationFederatedCredentialId' => 'ApplicationFederatedCredentialId',
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
        if (null !== $this->applicationFederatedCredentialId) {
            $res['ApplicationFederatedCredentialId'] = $this->applicationFederatedCredentialId;
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
        if (isset($map['ApplicationFederatedCredentialId'])) {
            $model->applicationFederatedCredentialId = $map['ApplicationFederatedCredentialId'];
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
