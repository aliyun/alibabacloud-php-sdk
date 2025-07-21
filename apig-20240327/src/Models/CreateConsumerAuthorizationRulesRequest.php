<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules;
use AlibabaCloud\Tea\Model;

class CreateConsumerAuthorizationRulesRequest extends Model
{
    /**
     * @description The consumer authentication rules to be created.
     *
     * @var authorizationRules[]
     */
    public $authorizationRules;
    protected $_name = [
        'authorizationRules' => 'authorizationRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRules) {
            $res['authorizationRules'] = [];
            if (null !== $this->authorizationRules && \is_array($this->authorizationRules)) {
                $n = 0;
                foreach ($this->authorizationRules as $item) {
                    $res['authorizationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerAuthorizationRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationRules'])) {
            if (!empty($map['authorizationRules'])) {
                $model->authorizationRules = [];
                $n = 0;
                foreach ($map['authorizationRules'] as $item) {
                    $model->authorizationRules[$n++] = null !== $item ? authorizationRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
