<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution;

use AlibabaCloud\Tea\Model;

class segmentBaggageCheckInInfoList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $luggageDirectInfoType;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'luggageDirectInfoType' => 'luggage_direct_info_type',
        'segmentIdList'         => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->luggageDirectInfoType) {
            $res['luggage_direct_info_type'] = $this->luggageDirectInfoType;
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentBaggageCheckInInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['luggage_direct_info_type'])) {
            $model->luggageDirectInfoType = $map['luggage_direct_info_type'];
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
