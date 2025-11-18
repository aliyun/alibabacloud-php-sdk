<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchResponseBody\data\solutionList;

use AlibabaCloud\Dara\Model;

class segmentBaggageCheckInInfoList extends Model
{
    /**
     * @var int
     */
    public $luggageDirectInfoType;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'luggageDirectInfoType' => 'luggage_direct_info_type',
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
        if (null !== $this->luggageDirectInfoType) {
            $res['luggage_direct_info_type'] = $this->luggageDirectInfoType;
        }

        if (null !== $this->segmentIdList) {
            if (\is_array($this->segmentIdList)) {
                $res['segment_id_list'] = [];
                $n1 = 0;
                foreach ($this->segmentIdList as $item1) {
                    $res['segment_id_list'][$n1] = $item1;
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
        if (isset($map['luggage_direct_info_type'])) {
            $model->luggageDirectInfoType = $map['luggage_direct_info_type'];
        }

        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = [];
                $n1 = 0;
                foreach ($map['segment_id_list'] as $item1) {
                    $model->segmentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
