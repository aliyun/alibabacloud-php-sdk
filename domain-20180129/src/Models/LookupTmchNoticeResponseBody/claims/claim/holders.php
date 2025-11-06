<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder;

class holders extends Model
{
    /**
     * @var holder[]
     */
    public $holder;
    protected $_name = [
        'holder' => 'Holder',
    ];

    public function validate()
    {
        if (\is_array($this->holder)) {
            Model::validateArray($this->holder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->holder) {
            if (\is_array($this->holder)) {
                $res['Holder'] = [];
                $n1 = 0;
                foreach ($this->holder as $item1) {
                    $res['Holder'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Holder'])) {
            if (!empty($map['Holder'])) {
                $model->holder = [];
                $n1 = 0;
                foreach ($map['Holder'] as $item1) {
                    $model->holder[$n1] = holder::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
