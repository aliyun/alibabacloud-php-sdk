<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody\dialNumberPairs\dialNumberPair;

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
        if (\is_array($this->dialNumberPair)) {
            Model::validateArray($this->dialNumberPair);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialNumberPair) {
            if (\is_array($this->dialNumberPair)) {
                $res['DialNumberPair'] = [];
                $n1 = 0;
                foreach ($this->dialNumberPair as $item1) {
                    $res['DialNumberPair'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DialNumberPair'])) {
            if (!empty($map['DialNumberPair'])) {
                $model->dialNumberPair = [];
                $n1 = 0;
                foreach ($map['DialNumberPair'] as $item1) {
                    $model->dialNumberPair[$n1] = dialNumberPair::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
