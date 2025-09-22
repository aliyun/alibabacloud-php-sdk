<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditRequest\ext\terms;

class ext extends Model
{
    /**
     * @var terms[]
     */
    public $terms;
    protected $_name = [
        'terms' => 'terms',
    ];

    public function validate()
    {
        if (\is_array($this->terms)) {
            Model::validateArray($this->terms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->terms) {
            if (\is_array($this->terms)) {
                $res['terms'] = [];
                $n1 = 0;
                foreach ($this->terms as $item1) {
                    $res['terms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['terms'])) {
            if (!empty($map['terms'])) {
                $model->terms = [];
                $n1 = 0;
                foreach ($map['terms'] as $item1) {
                    $model->terms[$n1] = terms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
