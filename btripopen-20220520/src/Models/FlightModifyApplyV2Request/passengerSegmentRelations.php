<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyApplyV2Request;

use AlibabaCloud\Tea\Model;

class passengerSegmentRelations extends Model
{
    /**
     * @example 3243028
     *
     * @var string
     */
    public $passengerId;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'passengerId'   => 'passenger_id',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerSegmentRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
