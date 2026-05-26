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
     * @var bool
     */
    public $createRAMRole;

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
     * @var bool
     */
    public $sessionBindingEnabled;

    /**
     * @var string
     */
    public $sourceAgentArn;

    /**
     * @var string
     */
    public $sourcePlatform;

    /**
     * @var string
     */
    public $workloadIdentityName;
    protected $_name = [
        'allowedResourceOAuth2ReturnURLsShrink' => 'AllowedResourceOAuth2ReturnURLs',
        'createRAMRole' => 'CreateRAMRole',
        'description' => 'Description',
        'identityProviderName' => 'IdentityProviderName',
        'roleArn' => 'RoleArn',
        'sessionBindingEnabled' => 'SessionBindingEnabled',
        'sourceAgentArn' => 'SourceAgentArn',
        'sourcePlatform' => 'SourcePlatform',
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

        if (null !== $this->createRAMRole) {
            $res['CreateRAMRole'] = $this->createRAMRole;
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

        if (null !== $this->sessionBindingEnabled) {
            $res['SessionBindingEnabled'] = $this->sessionBindingEnabled;
        }

        if (null !== $this->sourceAgentArn) {
            $res['SourceAgentArn'] = $this->sourceAgentArn;
        }

        if (null !== $this->sourcePlatform) {
            $res['SourcePlatform'] = $this->sourcePlatform;
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

        if (isset($map['CreateRAMRole'])) {
            $model->createRAMRole = $map['CreateRAMRole'];
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

        if (isset($map['SessionBindingEnabled'])) {
            $model->sessionBindingEnabled = $map['SessionBindingEnabled'];
        }

        if (isset($map['SourceAgentArn'])) {
            $model->sourceAgentArn = $map['SourceAgentArn'];
        }

        if (isset($map['SourcePlatform'])) {
            $model->sourcePlatform = $map['SourcePlatform'];
        }

        if (isset($map['WorkloadIdentityName'])) {
            $model->workloadIdentityName = $map['WorkloadIdentityName'];
        }

        return $model;
    }
}
