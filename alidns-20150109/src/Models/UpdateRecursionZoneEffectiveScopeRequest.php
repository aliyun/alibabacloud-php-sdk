<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneEffectiveScopeRequest\effectiveScopes;

class UpdateRecursionZoneEffectiveScopeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var effectiveScopes[]
     */
    public $effectiveScopes;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'effectiveScopes' => 'EffectiveScopes',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->effectiveScopes)) {
            Model::validateArray($this->effectiveScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->effectiveScopes) {
            if (\is_array($this->effectiveScopes)) {
                $res['EffectiveScopes'] = [];
                $n1 = 0;
                foreach ($this->effectiveScopes as $item1) {
                    $res['EffectiveScopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EffectiveScopes'])) {
            if (!empty($map['EffectiveScopes'])) {
                $model->effectiveScopes = [];
                $n1 = 0;
                foreach ($map['EffectiveScopes'] as $item1) {
                    $model->effectiveScopes[$n1] = effectiveScopes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
