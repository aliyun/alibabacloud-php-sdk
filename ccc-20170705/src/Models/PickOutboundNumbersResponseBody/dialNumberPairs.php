<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody\dialNumberPairs\dialNumberPair;
use AlibabaCloud\Tea\Model;

class dialNumberPairs extends Model
{
    /**
     * @var dialNumberPair[]
     */
    public $dialNumberPair;
    protected $_name = [
        'dialNumberPair' => 'DialNumberPair',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialNumberPair) {
            $res['DialNumberPair'] = [];
            if (null !== $this->dialNumberPair && \is_array($this->dialNumberPair)) {
                $n = 0;
                foreach ($this->dialNumberPair as $item) {
                    $res['DialNumberPair'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialNumberPairs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialNumberPair'])) {
            if (!empty($map['DialNumberPair'])) {
                $model->dialNumberPair = [];
                $n                     = 0;
                foreach ($map['DialNumberPair'] as $item) {
                    $model->dialNumberPair[$n++] = null !== $item ? dialNumberPair::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
