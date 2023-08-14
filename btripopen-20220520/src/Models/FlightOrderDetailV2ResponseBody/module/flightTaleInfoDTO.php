<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys;
use AlibabaCloud\Tea\Model;

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
     * @example 2
     *
     * @var int
     */
    public $tripTypeCode;
    protected $_name = [
        'journeys'     => 'journeys',
        'noticeTips'   => 'notice_tips',
        'tripType'     => 'trip_type',
        'tripTypeCode' => 'trip_type_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->journeys) {
            $res['journeys'] = [];
            if (null !== $this->journeys && \is_array($this->journeys)) {
                $n = 0;
                foreach ($this->journeys as $item) {
                    $res['journeys'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return flightTaleInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['journeys'])) {
            if (!empty($map['journeys'])) {
                $model->journeys = [];
                $n               = 0;
                foreach ($map['journeys'] as $item) {
                    $model->journeys[$n++] = null !== $item ? journeys::fromMap($item) : $item;
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
