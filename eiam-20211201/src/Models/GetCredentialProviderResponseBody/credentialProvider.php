<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider\credentialProviderConfig;

class credentialProvider extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var credentialProviderConfig
     */
    public $credentialProviderConfig;

    /**
     * @var string
     */
    public $credentialProviderCreationType;

    /**
     * @var string
     */
    public $credentialProviderId;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var string
     */
    public $credentialProviderName;

    /**
     * @var string
     */
    public $credentialProviderType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'credentialProviderConfig' => 'CredentialProviderConfig',
        'credentialProviderCreationType' => 'CredentialProviderCreationType',
        'credentialProviderId' => 'CredentialProviderId',
        'credentialProviderIdentifier' => 'CredentialProviderIdentifier',
        'credentialProviderName' => 'CredentialProviderName',
        'credentialProviderType' => 'CredentialProviderType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->credentialProviderConfig) {
            $this->credentialProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->credentialProviderConfig) {
            $res['CredentialProviderConfig'] = null !== $this->credentialProviderConfig ? $this->credentialProviderConfig->toArray($noStream) : $this->credentialProviderConfig;
        }

        if (null !== $this->credentialProviderCreationType) {
            $res['CredentialProviderCreationType'] = $this->credentialProviderCreationType;
        }

        if (null !== $this->credentialProviderId) {
            $res['CredentialProviderId'] = $this->credentialProviderId;
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['CredentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->credentialProviderName) {
            $res['CredentialProviderName'] = $this->credentialProviderName;
        }

        if (null !== $this->credentialProviderType) {
            $res['CredentialProviderType'] = $this->credentialProviderType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CredentialProviderConfig'])) {
            $model->credentialProviderConfig = credentialProviderConfig::fromMap($map['CredentialProviderConfig']);
        }

        if (isset($map['CredentialProviderCreationType'])) {
            $model->credentialProviderCreationType = $map['CredentialProviderCreationType'];
        }

        if (isset($map['CredentialProviderId'])) {
            $model->credentialProviderId = $map['CredentialProviderId'];
        }

        if (isset($map['CredentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['CredentialProviderIdentifier'];
        }

        if (isset($map['CredentialProviderName'])) {
            $model->credentialProviderName = $map['CredentialProviderName'];
        }

        if (isset($map['CredentialProviderType'])) {
            $model->credentialProviderType = $map['CredentialProviderType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
