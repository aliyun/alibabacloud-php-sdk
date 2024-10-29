<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundJourneys\segmentList;
use AlibabaCloud\Tea\Model;

class refundJourneys extends Model
{
    /**
     * @description segment list
     *
     * This parameter is required.
     * @var segmentList[]
     */
    public $segmentList;
    protected $_name = [
        'segmentList' => 'segment_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segmentList) {
            $res['segment_list'] = [];
            if (null !== $this->segmentList && \is_array($this->segmentList)) {
                $n = 0;
                foreach ($this->segmentList as $item) {
                    $res['segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundJourneys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['segment_list'])) {
            if (!empty($map['segment_list'])) {
                $model->segmentList = [];
                $n                  = 0;
                foreach ($map['segment_list'] as $item) {
                    $model->segmentList[$n++] = null !== $item ? segmentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
