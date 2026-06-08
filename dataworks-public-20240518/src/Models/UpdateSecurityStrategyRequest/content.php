<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateSecurityStrategyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateSecurityStrategyRequest\content\controllers;

class content extends Model
{
    /**
     * @var controllers[]
     */
    public $controllers;
    protected $_name = [
        'controllers' => 'Controllers',
    ];

    public function validate()
    {
        if (\is_array($this->controllers)) {
            Model::validateArray($this->controllers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controllers) {
            if (\is_array($this->controllers)) {
                $res['Controllers'] = [];
                $n1 = 0;
                foreach ($this->controllers as $item1) {
                    $res['Controllers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Controllers'])) {
            if (!empty($map['Controllers'])) {
                $model->controllers = [];
                $n1 = 0;
                foreach ($map['Controllers'] as $item1) {
                    $model->controllers[$n1] = controllers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
