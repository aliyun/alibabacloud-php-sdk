<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsForProviderResponseBody;

use AlibabaCloud\Dara\Model;

class applicationFederatedCredentials extends Model
{
    /**
     * @var string
     */
    public $applicationFederatedCredentialId;

    /**
     * @var string
     */
    public $applicationFederatedCredentialName;

    /**
     * @var string
     */
    public $applicationFederatedCredentialType;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $federatedCredentialProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastUsedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationFederatedCredentialId' => 'ApplicationFederatedCredentialId',
        'applicationFederatedCredentialName' => 'ApplicationFederatedCredentialName',
        'applicationFederatedCredentialType' => 'ApplicationFederatedCredentialType',
        'applicationId' => 'ApplicationId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'federatedCredentialProviderId' => 'FederatedCredentialProviderId',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
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

        if (null !== $this->applicationFederatedCredentialName) {
            $res['ApplicationFederatedCredentialName'] = $this->applicationFederatedCredentialName;
        }

        if (null !== $this->applicationFederatedCredentialType) {
            $res['ApplicationFederatedCredentialType'] = $this->applicationFederatedCredentialType;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->federatedCredentialProviderId) {
            $res['FederatedCredentialProviderId'] = $this->federatedCredentialProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['ApplicationFederatedCredentialName'])) {
            $model->applicationFederatedCredentialName = $map['ApplicationFederatedCredentialName'];
        }

        if (isset($map['ApplicationFederatedCredentialType'])) {
            $model->applicationFederatedCredentialType = $map['ApplicationFederatedCredentialType'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FederatedCredentialProviderId'])) {
            $model->federatedCredentialProviderId = $map['FederatedCredentialProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
