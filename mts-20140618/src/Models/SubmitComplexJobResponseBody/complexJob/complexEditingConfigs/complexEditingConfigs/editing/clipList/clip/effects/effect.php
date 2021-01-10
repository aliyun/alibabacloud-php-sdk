<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\clipList\clip\effects;

use AlibabaCloud\Tea\Model;

class effect extends Model
{
    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $effectConfig;
    protected $_name = [
        'effect'       => 'Effect',
        'effectConfig' => 'EffectConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->effectConfig) {
            $res['EffectConfig'] = $this->effectConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['EffectConfig'])) {
            $model->effectConfig = $map['EffectConfig'];
        }

        return $model;
    }
}
