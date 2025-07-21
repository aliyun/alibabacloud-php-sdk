<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\AkSkIdentityConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;
use AlibabaCloud\Tea\Model;

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
     * @example cs-cvgbtk6m1hkji5sb8dr0
     *
     * @var string
     */
    public $consumerId;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example ""
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @var JwtIdentityConfig
     */
    public $jwtIdentityConfig;

    /**
     * @example consumer-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1719386834548
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->akSkIdentityConfigs) {
            $res['akSkIdentityConfigs'] = null !== $this->akSkIdentityConfigs ? $this->akSkIdentityConfigs->toMap() : null;
        }
        if (null !== $this->apiKeyIdentityConfig) {
            $res['apiKeyIdentityConfig'] = null !== $this->apiKeyIdentityConfig ? $this->apiKeyIdentityConfig->toMap() : null;
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
            $res['jwtIdentityConfig'] = null !== $this->jwtIdentityConfig ? $this->jwtIdentityConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
