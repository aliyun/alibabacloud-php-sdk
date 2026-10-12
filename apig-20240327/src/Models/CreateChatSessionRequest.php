<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateChatSessionRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $products;

    /**
     * @var string
     */
    public $talkType;
    protected $_name = [
        'name' => 'name',
        'products' => 'products',
        'talkType' => 'talkType',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['products'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->talkType) {
            $res['talkType'] = $this->talkType;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['products'] as $item1) {
                    $model->products[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['talkType'])) {
            $model->talkType = $map['talkType'];
        }

        return $model;
    }
}
