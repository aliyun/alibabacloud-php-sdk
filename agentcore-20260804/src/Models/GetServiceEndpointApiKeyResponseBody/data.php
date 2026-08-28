<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointApiKeyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiKeyFingerprint;

    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var string
     */
    public $apiKeySource;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var string
     */
    public $serviceEndpointId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'apiKeyFingerprint' => 'apiKeyFingerprint',
        'apiKeyName' => 'apiKeyName',
        'apiKeySource' => 'apiKeySource',
        'authenticationType' => 'authenticationType',
        'serviceEndpointId' => 'serviceEndpointId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->apiKeyFingerprint) {
            $res['apiKeyFingerprint'] = $this->apiKeyFingerprint;
        }

        if (null !== $this->apiKeyName) {
            $res['apiKeyName'] = $this->apiKeyName;
        }

        if (null !== $this->apiKeySource) {
            $res['apiKeySource'] = $this->apiKeySource;
        }

        if (null !== $this->authenticationType) {
            $res['authenticationType'] = $this->authenticationType;
        }

        if (null !== $this->serviceEndpointId) {
            $res['serviceEndpointId'] = $this->serviceEndpointId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['apiKeyFingerprint'])) {
            $model->apiKeyFingerprint = $map['apiKeyFingerprint'];
        }

        if (isset($map['apiKeyName'])) {
            $model->apiKeyName = $map['apiKeyName'];
        }

        if (isset($map['apiKeySource'])) {
            $model->apiKeySource = $map['apiKeySource'];
        }

        if (isset($map['authenticationType'])) {
            $model->authenticationType = $map['authenticationType'];
        }

        if (isset($map['serviceEndpointId'])) {
            $model->serviceEndpointId = $map['serviceEndpointId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
