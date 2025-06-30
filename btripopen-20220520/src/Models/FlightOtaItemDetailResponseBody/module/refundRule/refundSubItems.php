<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule\refundSubItems\refundSubContents;

class refundSubItems extends Model
{
    /**
     * @var bool
     */
    public $isStruct;

    /**
     * @var string
     */
    public $ptc;

    /**
     * @var refundSubContents[]
     */
    public $refundSubContents;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'isStruct' => 'is_struct',
        'ptc' => 'ptc',
        'refundSubContents' => 'refund_sub_contents',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->refundSubContents)) {
            Model::validateArray($this->refundSubContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isStruct) {
            $res['is_struct'] = $this->isStruct;
        }

        if (null !== $this->ptc) {
            $res['ptc'] = $this->ptc;
        }

        if (null !== $this->refundSubContents) {
            if (\is_array($this->refundSubContents)) {
                $res['refund_sub_contents'] = [];
                $n1 = 0;
                foreach ($this->refundSubContents as $item1) {
                    $res['refund_sub_contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['is_struct'])) {
            $model->isStruct = $map['is_struct'];
        }

        if (isset($map['ptc'])) {
            $model->ptc = $map['ptc'];
        }

        if (isset($map['refund_sub_contents'])) {
            if (!empty($map['refund_sub_contents'])) {
                $model->refundSubContents = [];
                $n1 = 0;
                foreach ($map['refund_sub_contents'] as $item1) {
                    $model->refundSubContents[$n1] = refundSubContents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
