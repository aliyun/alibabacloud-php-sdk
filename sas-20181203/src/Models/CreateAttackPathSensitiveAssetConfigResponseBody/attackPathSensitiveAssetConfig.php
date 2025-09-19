<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateAttackPathSensitiveAssetConfigResponseBody;

use AlibabaCloud\Dara\Model;

class attackPathSensitiveAssetConfig extends Model
{
    /**
     * @var string
     */
    public $attackPathSensitiveAssetConfigId;
    protected $_name = [
        'attackPathSensitiveAssetConfigId' => 'AttackPathSensitiveAssetConfigId',
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

        return $model;
    }
}
