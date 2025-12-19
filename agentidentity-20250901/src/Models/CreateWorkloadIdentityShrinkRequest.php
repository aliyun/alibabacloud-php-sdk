<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkloadIdentityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $allowedResourceOAuth2ReturnURLsShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $identityProviderName;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $workloadIdentityName;
    protected $_name = [
        'allowedResourceOAuth2ReturnURLsShrink' => 'AllowedResourceOAuth2ReturnURLs',
        'description' => 'Description',
        'identityProviderName' => 'IdentityProviderName',
        'roleArn' => 'RoleArn',
        'workloadIdentityName' => 'WorkloadIdentityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedResourceOAuth2ReturnURLsShrink) {
            $res['AllowedResourceOAuth2ReturnURLs'] = $this->allowedResourceOAuth2ReturnURLsShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->identityProviderName) {
            $res['IdentityProviderName'] = $this->identityProviderName;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->workloadIdentityName) {
            $res['WorkloadIdentityName'] = $this->workloadIdentityName;
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
        if (isset($map['AllowedResourceOAuth2ReturnURLs'])) {
            $model->allowedResourceOAuth2ReturnURLsShrink = $map['AllowedResourceOAuth2ReturnURLs'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IdentityProviderName'])) {
            $model->identityProviderName = $map['IdentityProviderName'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['WorkloadIdentityName'])) {
            $model->workloadIdentityName = $map['WorkloadIdentityName'];
        }

        return $model;
    }
}
