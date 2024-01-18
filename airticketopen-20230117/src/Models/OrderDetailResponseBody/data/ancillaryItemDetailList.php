<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\ancillary;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\passenger;
use AlibabaCloud\Tea\Model;

class ancillaryItemDetailList extends Model
{
    /**
     * @var ancillary
     */
    public $ancillary;

    /**
     * @var passenger
     */
    public $passenger;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'ancillary'     => 'ancillary',
        'passenger'     => 'passenger',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ancillary) {
            $res['ancillary'] = null !== $this->ancillary ? $this->ancillary->toMap() : null;
        }
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toMap() : null;
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ancillaryItemDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ancillary'])) {
            $model->ancillary = ancillary::fromMap($map['ancillary']);
        }
        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
