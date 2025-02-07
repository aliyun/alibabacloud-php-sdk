<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsResponseBody\addons;

class ListAddonsResponseBody extends Model
{
    /**
     * @var addons[]
     */
    public $addons;
    protected $_name = [
        'addons' => 'addons',
    ];

    public function validate()
    {
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addons) {
            if (\is_array($this->addons)) {
                $res['addons'] = [];
                $n1            = 0;
                foreach ($this->addons as $item1) {
                    $res['addons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n1            = 0;
                foreach ($map['addons'] as $item1) {
                    $model->addons[$n1++] = addons::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
