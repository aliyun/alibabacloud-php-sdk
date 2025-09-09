<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneEffectiveScopeRequest;

use AlibabaCloud\Dara\Model;

class effectiveScopes extends Model
{
    /**
     * @var string
     */
    public $effectiveType;

    /**
     * @var string[]
     */
    public $scope;
    protected $_name = [
        'effectiveType' => 'EffectiveType',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->scope)) {
            Model::validateArray($this->scope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveType) {
            $res['EffectiveType'] = $this->effectiveType;
        }

        if (null !== $this->scope) {
            if (\is_array($this->scope)) {
                $res['Scope'] = [];
                $n1 = 0;
                foreach ($this->scope as $item1) {
                    $res['Scope'][$n1] = $item1;
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
        if (isset($map['EffectiveType'])) {
            $model->effectiveType = $map['EffectiveType'];
        }

        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n1 = 0;
                foreach ($map['Scope'] as $item1) {
                    $model->scope[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
