<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListChatSessionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
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
    public $sessionId;

    /**
     * @var string
     */
    public $talkType;
    protected $_name = [
        'name' => 'name',
        'products' => 'products',
        'sessionId' => 'sessionId',
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

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['talkType'])) {
            $model->talkType = $map['talkType'];
        }

        return $model;
    }
}
