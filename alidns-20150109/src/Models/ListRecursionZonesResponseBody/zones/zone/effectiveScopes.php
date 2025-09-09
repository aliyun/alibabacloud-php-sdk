<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionZonesResponseBody\zones\zone\effectiveScopes\effectiveScope;

class effectiveScopes extends Model
{
    /**
     * @var effectiveScope[]
     */
    public $effectiveScope;
    protected $_name = [
        'effectiveScope' => 'EffectiveScope',
    ];

    public function validate()
    {
        if (\is_array($this->effectiveScope)) {
            Model::validateArray($this->effectiveScope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveScope) {
            if (\is_array($this->effectiveScope)) {
                $res['EffectiveScope'] = [];
                $n1 = 0;
                foreach ($this->effectiveScope as $item1) {
                    $res['EffectiveScope'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EffectiveScope'])) {
            if (!empty($map['EffectiveScope'])) {
                $model->effectiveScope = [];
                $n1 = 0;
                foreach ($map['EffectiveScope'] as $item1) {
                    $model->effectiveScope[$n1] = effectiveScope::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
