<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\accessTimeRangeConfig\effectiveTime;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = [];
            if (null !== $this->effectiveTime && \is_array($this->effectiveTime)) {
                $n = 0;
                foreach ($this->effectiveTime as $item) {
                    $res['EffectiveTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessTimeRangeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTime'])) {
            if (!empty($map['EffectiveTime'])) {
                $model->effectiveTime = [];
                $n                    = 0;
                foreach ($map['EffectiveTime'] as $item) {
                    $model->effectiveTime[$n++] = null !== $item ? effectiveTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
