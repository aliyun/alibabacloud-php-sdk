<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\ancillary;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\passenger;

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
        'ancillary' => 'ancillary',
        'passenger' => 'passenger',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
        if (null !== $this->ancillary) {
            $this->ancillary->validate();
        }
        if (null !== $this->passenger) {
            $this->passenger->validate();
        }
        if (\is_array($this->segmentIdList)) {
            Model::validateArray($this->segmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ancillary) {
            $res['ancillary'] = null !== $this->ancillary ? $this->ancillary->toArray($noStream) : $this->ancillary;
        }

        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toArray($noStream) : $this->passenger;
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
        if (isset($map['ancillary'])) {
            $model->ancillary = ancillary::fromMap($map['ancillary']);
        }

        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
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
