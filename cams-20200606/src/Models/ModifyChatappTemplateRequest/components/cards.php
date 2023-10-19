<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\cards\cardComponents;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardComponents) {
            $res['CardComponents'] = [];
            if (null !== $this->cardComponents && \is_array($this->cardComponents)) {
                $n = 0;
                foreach ($this->cardComponents as $item) {
                    $res['CardComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardComponents'])) {
            if (!empty($map['CardComponents'])) {
                $model->cardComponents = [];
                $n                     = 0;
                foreach ($map['CardComponents'] as $item) {
                    $model->cardComponents[$n++] = null !== $item ? cardComponents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
