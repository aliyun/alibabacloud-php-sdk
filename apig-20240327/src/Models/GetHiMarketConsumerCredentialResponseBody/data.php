<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetHiMarketConsumerCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketApiKeyConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHmacConfig;

class data extends Model
{
    /**
     * @var HiMarketApiKeyConfig
     */
    public $apiKeyConfig;

    /**
     * @var HiMarketHmacConfig
     */
    public $hmacConfig;
    protected $_name = [
        'apiKeyConfig' => 'apiKeyConfig',
        'hmacConfig' => 'hmacConfig',
    ];

    public function validate()
    {
        if (null !== $this->apiKeyConfig) {
            $this->apiKeyConfig->validate();
        }
        if (null !== $this->hmacConfig) {
            $this->hmacConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyConfig) {
            $res['apiKeyConfig'] = null !== $this->apiKeyConfig ? $this->apiKeyConfig->toArray($noStream) : $this->apiKeyConfig;
        }

        if (null !== $this->hmacConfig) {
            $res['hmacConfig'] = null !== $this->hmacConfig ? $this->hmacConfig->toArray($noStream) : $this->hmacConfig;
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
        if (isset($map['apiKeyConfig'])) {
            $model->apiKeyConfig = HiMarketApiKeyConfig::fromMap($map['apiKeyConfig']);
        }

        if (isset($map['hmacConfig'])) {
            $model->hmacConfig = HiMarketHmacConfig::fromMap($map['hmacConfig']);
        }

        return $model;
    }
}
