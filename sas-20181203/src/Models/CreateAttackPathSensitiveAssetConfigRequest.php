<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAttackPathSensitiveAssetConfigRequest\attackPathAssetList;

class CreateAttackPathSensitiveAssetConfigRequest extends Model
{
    /**
     * @var attackPathAssetList[]
     */
    public $attackPathAssetList;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'attackPathAssetList' => 'AttackPathAssetList',
        'configType' => 'ConfigType',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathAssetList)) {
            Model::validateArray($this->attackPathAssetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathAssetList) {
            if (\is_array($this->attackPathAssetList)) {
                $res['AttackPathAssetList'] = [];
                $n1 = 0;
                foreach ($this->attackPathAssetList as $item1) {
                    $res['AttackPathAssetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AttackPathAssetList'])) {
            if (!empty($map['AttackPathAssetList'])) {
                $model->attackPathAssetList = [];
                $n1 = 0;
                foreach ($map['AttackPathAssetList'] as $item1) {
                    $model->attackPathAssetList[$n1] = attackPathAssetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        return $model;
    }
}
