<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetWorkloadIdentityResponseBody;

use AlibabaCloud\Dara\Model;

class workloadIdentity extends Model
{
    /**
     * @var string[]
     */
    public $allowedResourceOAuth2ReturnURLs;

    /**
     * @var string
     */
    public $createTime;

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
    public $updateTime;

    /**
     * @var string
     */
    public $workloadIdentityArn;

    /**
     * @var string
     */
    public $workloadIdentityName;
    protected $_name = [
        'allowedResourceOAuth2ReturnURLs' => 'AllowedResourceOAuth2ReturnURLs',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'identityProviderName' => 'IdentityProviderName',
        'roleArn' => 'RoleArn',
        'updateTime' => 'UpdateTime',
        'workloadIdentityArn' => 'WorkloadIdentityArn',
        'workloadIdentityName' => 'WorkloadIdentityName',
    ];

    public function validate()
    {
        if (\is_array($this->allowedResourceOAuth2ReturnURLs)) {
            Model::validateArray($this->allowedResourceOAuth2ReturnURLs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedResourceOAuth2ReturnURLs) {
            if (\is_array($this->allowedResourceOAuth2ReturnURLs)) {
                $res['AllowedResourceOAuth2ReturnURLs'] = [];
                $n1 = 0;
                foreach ($this->allowedResourceOAuth2ReturnURLs as $item1) {
                    $res['AllowedResourceOAuth2ReturnURLs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->workloadIdentityArn) {
            $res['WorkloadIdentityArn'] = $this->workloadIdentityArn;
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
            if (!empty($map['AllowedResourceOAuth2ReturnURLs'])) {
                $model->allowedResourceOAuth2ReturnURLs = [];
                $n1 = 0;
                foreach ($map['AllowedResourceOAuth2ReturnURLs'] as $item1) {
                    $model->allowedResourceOAuth2ReturnURLs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['WorkloadIdentityArn'])) {
            $model->workloadIdentityArn = $map['WorkloadIdentityArn'];
        }

        if (isset($map['WorkloadIdentityName'])) {
            $model->workloadIdentityName = $map['WorkloadIdentityName'];
        }

        return $model;
    }
}
