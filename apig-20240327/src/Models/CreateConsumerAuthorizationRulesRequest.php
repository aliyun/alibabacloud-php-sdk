<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules;

class CreateConsumerAuthorizationRulesRequest extends Model
{
    /**
     * @var authorizationRules[]
     */
    public $authorizationRules;
    protected $_name = [
        'authorizationRules' => 'authorizationRules',
    ];

    public function validate()
    {
        if (\is_array($this->authorizationRules)) {
            Model::validateArray($this->authorizationRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationRules) {
            if (\is_array($this->authorizationRules)) {
                $res['authorizationRules'] = [];
                $n1 = 0;
                foreach ($this->authorizationRules as $item1) {
                    $res['authorizationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['authorizationRules'])) {
            if (!empty($map['authorizationRules'])) {
                $model->authorizationRules = [];
                $n1 = 0;
                foreach ($map['authorizationRules'] as $item1) {
                    $model->authorizationRules[$n1] = authorizationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
