<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetAttackPathSensitiveAssetConfigRequest extends Model
{
    /**
     * @var string
     */
    public $attackPathSensitiveAssetConfigId;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'attackPathSensitiveAssetConfigId' => 'AttackPathSensitiveAssetConfigId',
        'configType' => 'ConfigType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathSensitiveAssetConfigId) {
            $res['AttackPathSensitiveAssetConfigId'] = $this->attackPathSensitiveAssetConfigId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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
        if (isset($map['AttackPathSensitiveAssetConfigId'])) {
            $model->attackPathSensitiveAssetConfigId = $map['AttackPathSensitiveAssetConfigId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        return $model;
    }
}
