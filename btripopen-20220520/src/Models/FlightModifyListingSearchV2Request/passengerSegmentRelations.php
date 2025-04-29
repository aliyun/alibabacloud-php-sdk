<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request;

use AlibabaCloud\Dara\Model;

class passengerSegmentRelations extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->segmentIdList)) {
            Model::validateArray($this->segmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->segmentIdList) {
            if (\is_array($this->segmentIdList)) {
                $res['segment_id_list'] = [];
                $n1 = 0;
                foreach ($this->segmentIdList as $item1) {
                    $res['segment_id_list'][$n1++] = $item1;
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
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = [];
                $n1 = 0;
                foreach ($map['segment_id_list'] as $item1) {
                    $model->segmentIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
