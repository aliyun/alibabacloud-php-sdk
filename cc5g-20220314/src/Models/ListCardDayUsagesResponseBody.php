<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody\cards;
use AlibabaCloud\Tea\Model;

class ListCardDayUsagesResponseBody extends Model
{
    /**
     * @var cards[]
     */
    public $cards;

    /**
     * @example AA93A076-3D94-51AB-AC70-4C94AF003B03
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cards'     => 'Cards',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cards) {
            $res['Cards'] = [];
            if (null !== $this->cards && \is_array($this->cards)) {
                $n = 0;
                foreach ($this->cards as $item) {
                    $res['Cards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCardDayUsagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cards'])) {
            if (!empty($map['Cards'])) {
                $model->cards = [];
                $n            = 0;
                foreach ($map['Cards'] as $item) {
                    $model->cards[$n++] = null !== $item ? cards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
