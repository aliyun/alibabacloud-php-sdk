<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest\accessTimeRangeConfig\effectiveTime;

class accessTimeRangeConfig extends Model
{
    /**
     * @var effectiveTime[]
     */
    public $effectiveTime;
    protected $_name = [
        'effectiveTime' => 'EffectiveTime',
    ];

    public function validate()
    {
        if (\is_array($this->effectiveTime)) {
            Model::validateArray($this->effectiveTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveTime) {
            if (\is_array($this->effectiveTime)) {
                $res['EffectiveTime'] = [];
                $n1 = 0;
                foreach ($this->effectiveTime as $item1) {
                    $res['EffectiveTime'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EffectiveTime'])) {
            if (!empty($map['EffectiveTime'])) {
                $model->effectiveTime = [];
                $n1 = 0;
                foreach ($map['EffectiveTime'] as $item1) {
                    $model->effectiveTime[$n1] = effectiveTime::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
