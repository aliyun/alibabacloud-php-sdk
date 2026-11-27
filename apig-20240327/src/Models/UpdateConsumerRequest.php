<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateConsumerRequest extends Model
{
    /**
     * @var AkSkIdentityConfig[]
     */
    public $akSkIdentityConfigs;

    /**
     * @var ApiKeyIdentityConfig
     */
    public $apikeyIdentityConfig;

    /**
     * @var bool
     */
    public $clearExpireAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableAfterRenewal;

    /**
     * @var int
     */
    public $expireAt;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var JwtIdentityConfig
     */
    public $jwtIdentityConfig;

    /**
     * @var bool
     */
    public $renew;
    protected $_name = [
        'akSkIdentityConfigs' => 'akSkIdentityConfigs',
        'apikeyIdentityConfig' => 'apikeyIdentityConfig',
        'clearExpireAt' => 'clearExpireAt',
        'description' => 'description',
        'enable' => 'enable',
        'enableAfterRenewal' => 'enableAfterRenewal',
        'expireAt' => 'expireAt',
        'extInfo' => 'extInfo',
        'jwtIdentityConfig' => 'jwtIdentityConfig',
        'renew' => 'renew',
    ];

    public function validate()
    {
        if (\is_array($this->akSkIdentityConfigs)) {
            Model::validateArray($this->akSkIdentityConfigs);
        }
        if (null !== $this->apikeyIdentityConfig) {
            $this->apikeyIdentityConfig->validate();
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
            if (\is_array($this->akSkIdentityConfigs)) {
                $res['akSkIdentityConfigs'] = [];
                $n1 = 0;
                foreach ($this->akSkIdentityConfigs as $item1) {
                    $res['akSkIdentityConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apikeyIdentityConfig) {
            $res['apikeyIdentityConfig'] = null !== $this->apikeyIdentityConfig ? $this->apikeyIdentityConfig->toArray($noStream) : $this->apikeyIdentityConfig;
        }

        if (null !== $this->clearExpireAt) {
            $res['clearExpireAt'] = $this->clearExpireAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->enableAfterRenewal) {
            $res['enableAfterRenewal'] = $this->enableAfterRenewal;
        }

        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }

        if (null !== $this->jwtIdentityConfig) {
            $res['jwtIdentityConfig'] = null !== $this->jwtIdentityConfig ? $this->jwtIdentityConfig->toArray($noStream) : $this->jwtIdentityConfig;
        }

        if (null !== $this->renew) {
            $res['renew'] = $this->renew;
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
            if (!empty($map['akSkIdentityConfigs'])) {
                $model->akSkIdentityConfigs = [];
                $n1 = 0;
                foreach ($map['akSkIdentityConfigs'] as $item1) {
                    $model->akSkIdentityConfigs[$n1] = AkSkIdentityConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['apikeyIdentityConfig'])) {
            $model->apikeyIdentityConfig = ApiKeyIdentityConfig::fromMap($map['apikeyIdentityConfig']);
        }

        if (isset($map['clearExpireAt'])) {
            $model->clearExpireAt = $map['clearExpireAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['enableAfterRenewal'])) {
            $model->enableAfterRenewal = $map['enableAfterRenewal'];
        }

        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }

        if (isset($map['jwtIdentityConfig'])) {
            $model->jwtIdentityConfig = JwtIdentityConfig::fromMap($map['jwtIdentityConfig']);
        }

        if (isset($map['renew'])) {
            $model->renew = $map['renew'];
        }

        return $model;
    }
}
