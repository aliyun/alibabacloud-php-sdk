<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\cards\cardComponents;

class cards extends Model
{
    /**
     * @var cardComponents[]
     */
    public $cardComponents;
    protected $_name = [
        'cardComponents' => 'CardComponents',
    ];

    public function validate()
    {
        if (\is_array($this->cardComponents)) {
            Model::validateArray($this->cardComponents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardComponents) {
            if (\is_array($this->cardComponents)) {
                $res['CardComponents'] = [];
                $n1 = 0;
                foreach ($this->cardComponents as $item1) {
                    $res['CardComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CardComponents'])) {
            if (!empty($map['CardComponents'])) {
                $model->cardComponents = [];
                $n1 = 0;
                foreach ($map['CardComponents'] as $item1) {
                    $model->cardComponents[$n1++] = cardComponents::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
