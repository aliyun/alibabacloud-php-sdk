<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListFederatedCredentialProvidersRequest extends Model
{
    /**
     * @var string
     */
    public $federatedCredentialProviderName;

    /**
     * @var string
     */
    public $federatedCredentialProviderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $previousToken;
    protected $_name = [
        'federatedCredentialProviderName' => 'FederatedCredentialProviderName',
        'federatedCredentialProviderType' => 'FederatedCredentialProviderType',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->federatedCredentialProviderName) {
            $res['FederatedCredentialProviderName'] = $this->federatedCredentialProviderName;
        }

        if (null !== $this->federatedCredentialProviderType) {
            $res['FederatedCredentialProviderType'] = $this->federatedCredentialProviderType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
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
        if (isset($map['FederatedCredentialProviderName'])) {
            $model->federatedCredentialProviderName = $map['FederatedCredentialProviderName'];
        }

        if (isset($map['FederatedCredentialProviderType'])) {
            $model->federatedCredentialProviderType = $map['FederatedCredentialProviderType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        return $model;
    }
}
