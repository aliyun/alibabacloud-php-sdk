<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody\data\topFives;

class data extends Model
{
    /**
     * @var topFives[]
     */
    public $topFives;
    protected $_name = [
        'topFives' => 'TopFives',
    ];

    public function validate()
    {
        if (\is_array($this->topFives)) {
            Model::validateArray($this->topFives);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topFives) {
            if (\is_array($this->topFives)) {
                $res['TopFives'] = [];
                $n1 = 0;
                foreach ($this->topFives as $item1) {
                    $res['TopFives'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopFives'])) {
            if (!empty($map['TopFives'])) {
                $model->topFives = [];
                $n1 = 0;
                foreach ($map['TopFives'] as $item1) {
                    $model->topFives[$n1] = topFives::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
