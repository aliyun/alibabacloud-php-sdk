<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackPathSensitiveAssetConfigResponseBody\attackPathSensitiveAssetConfig;

class GetAttackPathSensitiveAssetConfigResponseBody extends Model
{
    /**
     * @var attackPathSensitiveAssetConfig
     */
    public $attackPathSensitiveAssetConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathSensitiveAssetConfig' => 'AttackPathSensitiveAssetConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->attackPathSensitiveAssetConfig) {
            $this->attackPathSensitiveAssetConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathSensitiveAssetConfig) {
            $res['AttackPathSensitiveAssetConfig'] = null !== $this->attackPathSensitiveAssetConfig ? $this->attackPathSensitiveAssetConfig->toArray($noStream) : $this->attackPathSensitiveAssetConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttackPathSensitiveAssetConfig'])) {
            $model->attackPathSensitiveAssetConfig = attackPathSensitiveAssetConfig::fromMap($map['AttackPathSensitiveAssetConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
