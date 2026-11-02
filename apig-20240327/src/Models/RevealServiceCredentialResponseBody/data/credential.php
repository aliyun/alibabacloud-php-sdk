<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RevealServiceCredentialResponseBody\data;

use AlibabaCloud\Dara\Model;

class credential extends Model
{
    /**
     * @var string
     */
    public $apiKeyGenerateMode;

    /**
     * @var string[]
     */
    public $apiKeyReferences;

    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $awsAccessKey;

    /**
     * @var string
     */
    public $awsRegion;

    /**
     * @var string
     */
    public $awsSecretKey;

    /**
     * @var string
     */
    public $credentialSource;

    /**
     * @var string
     */
    public $endpointMode;

    /**
     * @var string
     */
    public $klingAccessKey;

    /**
     * @var string
     */
    public $klingSecretKey;

    /**
     * @var string
     */
    public $vertexAuthKey;

    /**
     * @var string
     */
    public $vertexProjectId;

    /**
     * @var string
     */
    public $vertexRegion;
    protected $_name = [
        'apiKeyGenerateMode' => 'apiKeyGenerateMode',
        'apiKeyReferences' => 'apiKeyReferences',
        'apiKeys' => 'apiKeys',
        'awsAccessKey' => 'awsAccessKey',
        'awsRegion' => 'awsRegion',
        'awsSecretKey' => 'awsSecretKey',
        'credentialSource' => 'credentialSource',
        'endpointMode' => 'endpointMode',
        'klingAccessKey' => 'klingAccessKey',
        'klingSecretKey' => 'klingSecretKey',
        'vertexAuthKey' => 'vertexAuthKey',
        'vertexProjectId' => 'vertexProjectId',
        'vertexRegion' => 'vertexRegion',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeyReferences)) {
            Model::validateArray($this->apiKeyReferences);
        }
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyGenerateMode) {
            $res['apiKeyGenerateMode'] = $this->apiKeyGenerateMode;
        }

        if (null !== $this->apiKeyReferences) {
            if (\is_array($this->apiKeyReferences)) {
                $res['apiKeyReferences'] = [];
                $n1 = 0;
                foreach ($this->apiKeyReferences as $item1) {
                    $res['apiKeyReferences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->awsAccessKey) {
            $res['awsAccessKey'] = $this->awsAccessKey;
        }

        if (null !== $this->awsRegion) {
            $res['awsRegion'] = $this->awsRegion;
        }

        if (null !== $this->awsSecretKey) {
            $res['awsSecretKey'] = $this->awsSecretKey;
        }

        if (null !== $this->credentialSource) {
            $res['credentialSource'] = $this->credentialSource;
        }

        if (null !== $this->endpointMode) {
            $res['endpointMode'] = $this->endpointMode;
        }

        if (null !== $this->klingAccessKey) {
            $res['klingAccessKey'] = $this->klingAccessKey;
        }

        if (null !== $this->klingSecretKey) {
            $res['klingSecretKey'] = $this->klingSecretKey;
        }

        if (null !== $this->vertexAuthKey) {
            $res['vertexAuthKey'] = $this->vertexAuthKey;
        }

        if (null !== $this->vertexProjectId) {
            $res['vertexProjectId'] = $this->vertexProjectId;
        }

        if (null !== $this->vertexRegion) {
            $res['vertexRegion'] = $this->vertexRegion;
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
        if (isset($map['apiKeyGenerateMode'])) {
            $model->apiKeyGenerateMode = $map['apiKeyGenerateMode'];
        }

        if (isset($map['apiKeyReferences'])) {
            if (!empty($map['apiKeyReferences'])) {
                $model->apiKeyReferences = [];
                $n1 = 0;
                foreach ($map['apiKeyReferences'] as $item1) {
                    $model->apiKeyReferences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['awsAccessKey'])) {
            $model->awsAccessKey = $map['awsAccessKey'];
        }

        if (isset($map['awsRegion'])) {
            $model->awsRegion = $map['awsRegion'];
        }

        if (isset($map['awsSecretKey'])) {
            $model->awsSecretKey = $map['awsSecretKey'];
        }

        if (isset($map['credentialSource'])) {
            $model->credentialSource = $map['credentialSource'];
        }

        if (isset($map['endpointMode'])) {
            $model->endpointMode = $map['endpointMode'];
        }

        if (isset($map['klingAccessKey'])) {
            $model->klingAccessKey = $map['klingAccessKey'];
        }

        if (isset($map['klingSecretKey'])) {
            $model->klingSecretKey = $map['klingSecretKey'];
        }

        if (isset($map['vertexAuthKey'])) {
            $model->vertexAuthKey = $map['vertexAuthKey'];
        }

        if (isset($map['vertexProjectId'])) {
            $model->vertexProjectId = $map['vertexProjectId'];
        }

        if (isset($map['vertexRegion'])) {
            $model->vertexRegion = $map['vertexRegion'];
        }

        return $model;
    }
}
