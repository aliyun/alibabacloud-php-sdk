<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys;

class flightTaleInfoDTO extends Model
{
    /**
     * @var journeys[]
     */
    public $journeys;

    /**
     * @var string
     */
    public $noticeTips;

    /**
     * @var string
     */
    public $tripType;

    /**
     * @var int
     */
    public $tripTypeCode;
    protected $_name = [
        'journeys' => 'journeys',
        'noticeTips' => 'notice_tips',
        'tripType' => 'trip_type',
        'tripTypeCode' => 'trip_type_code',
    ];

    public function validate()
    {
        if (\is_array($this->journeys)) {
            Model::validateArray($this->journeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->journeys) {
            if (\is_array($this->journeys)) {
                $res['journeys'] = [];
                $n1 = 0;
                foreach ($this->journeys as $item1) {
                    $res['journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noticeTips) {
            $res['notice_tips'] = $this->noticeTips;
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        if (null !== $this->tripTypeCode) {
            $res['trip_type_code'] = $this->tripTypeCode;
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
        if (isset($map['journeys'])) {
            if (!empty($map['journeys'])) {
                $model->journeys = [];
                $n1 = 0;
                foreach ($map['journeys'] as $item1) {
                    $model->journeys[$n1] = journeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['notice_tips'])) {
            $model->noticeTips = $map['notice_tips'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        if (isset($map['trip_type_code'])) {
            $model->tripTypeCode = $map['trip_type_code'];
        }

        return $model;
    }
}
