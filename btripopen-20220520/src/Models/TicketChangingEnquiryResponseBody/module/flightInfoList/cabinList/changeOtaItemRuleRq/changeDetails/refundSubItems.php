<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails\refundSubItems\refundSubContents;
use AlibabaCloud\Tea\Model;

class refundSubItems extends Model
{
    /**
     * @var string
     */
    public $content;

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
        'content'           => 'content',
        'isStruct'          => 'is_struct',
        'ptc'               => 'ptc',
        'refundSubContents' => 'refund_sub_contents',
        'title'             => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->isStruct) {
            $res['is_struct'] = $this->isStruct;
        }
        if (null !== $this->ptc) {
            $res['ptc'] = $this->ptc;
        }
        if (null !== $this->refundSubContents) {
            $res['refund_sub_contents'] = [];
            if (null !== $this->refundSubContents && \is_array($this->refundSubContents)) {
                $n = 0;
                foreach ($this->refundSubContents as $item) {
                    $res['refund_sub_contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundSubItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['is_struct'])) {
            $model->isStruct = $map['is_struct'];
        }
        if (isset($map['ptc'])) {
            $model->ptc = $map['ptc'];
        }
        if (isset($map['refund_sub_contents'])) {
            if (!empty($map['refund_sub_contents'])) {
                $model->refundSubContents = [];
                $n                        = 0;
                foreach ($map['refund_sub_contents'] as $item) {
                    $model->refundSubContents[$n++] = null !== $item ? refundSubContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
