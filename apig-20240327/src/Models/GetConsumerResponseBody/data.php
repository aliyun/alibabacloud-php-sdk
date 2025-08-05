<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AkSkIdentityConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;

class data extends Model
{
    /**
     * @var AkSkIdentityConfig
     */
    public $akSkIdentityConfigs;

    /**
     * @var ApiKeyIdentityConfig
     */
    public $apiKeyIdentityConfig;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var JwtIdentityConfig
     */
    public $jwtIdentityConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'akSkIdentityConfigs' => 'akSkIdentityConfigs',
        'apiKeyIdentityConfig' => 'apiKeyIdentityConfig',
        'consumerId' => 'consumerId',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'enable' => 'enable',
        'jwtIdentityConfig' => 'jwtIdentityConfig',
        'name' => 'name',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->akSkIdentityConfigs) {
            $this->akSkIdentityConfigs->validate();
        }
        if (null !== $this->apiKeyIdentityConfig) {
            $this->apiKeyIdentityConfig->validate();
        }
        if (null !== $this->jwtIdentityConfig) {
            $this->jwtIdentityConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->akSkIdentityConfigs) {
            $res['akSkIdentityConfigs'] = null !== $this->akSkIdentityConfigs ? $this->akSkIdentityConfigs->toArray($noStream) : $this->akSkIdentityConfigs;
        }

        if (null !== $this->apiKeyIdentityConfig) {
            $res['apiKeyIdentityConfig'] = null !== $this->apiKeyIdentityConfig ? $this->apiKeyIdentityConfig->toArray($noStream) : $this->apiKeyIdentityConfig;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->jwtIdentityConfig) {
            $res['jwtIdentityConfig'] = null !== $this->jwtIdentityConfig ? $this->jwtIdentityConfig->toArray($noStream) : $this->jwtIdentityConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['akSkIdentityConfigs'])) {
            $model->akSkIdentityConfigs = AkSkIdentityConfig::fromMap($map['akSkIdentityConfigs']);
        }

        if (isset($map['apiKeyIdentityConfig'])) {
            $model->apiKeyIdentityConfig = ApiKeyIdentityConfig::fromMap($map['apiKeyIdentityConfig']);
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['jwtIdentityConfig'])) {
            $model->jwtIdentityConfig = JwtIdentityConfig::fromMap($map['jwtIdentityConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
