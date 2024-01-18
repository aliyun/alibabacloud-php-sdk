<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changedJourneys\segmentList;
use AlibabaCloud\Tea\Model;

class changedJourneys extends Model
{
    /**
     * @var segmentList[]
     */
    public $segmentList;

    /**
     * @example 0
     *
     * @var int
     */
    public $transferCount;
    protected $_name = [
        'segmentList'   => 'segment_list',
        'transferCount' => 'transfer_count',
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
        if (null !== $this->transferCount) {
            $res['transfer_count'] = $this->transferCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changedJourneys
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
        if (isset($map['transfer_count'])) {
            $model->transferCount = $map['transfer_count'];
        }

        return $model;
    }
}
