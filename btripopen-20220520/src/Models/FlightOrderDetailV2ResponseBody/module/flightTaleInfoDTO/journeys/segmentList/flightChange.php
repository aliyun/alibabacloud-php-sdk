<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys\segmentList;

use AlibabaCloud\Tea\Model;

class flightChange extends Model
{
    /**
     * @var string
     */
    public $changeDesc;

    /**
     * @var string
     */
    public $changeStatus;

    /**
     * @var string
     */
    public $changeStatusCode;

    /**
     * @var mixed
     */
    public $newSegment;

    /**
     * @var string[]
     */
    public $passengerNames;
    protected $_name = [
        'changeDesc'       => 'change_desc',
        'changeStatus'     => 'change_status',
        'changeStatusCode' => 'change_status_code',
        'newSegment'       => 'new_segment',
        'passengerNames'   => 'passenger_names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeDesc) {
            $res['change_desc'] = $this->changeDesc;
        }
        if (null !== $this->changeStatus) {
            $res['change_status'] = $this->changeStatus;
        }
        if (null !== $this->changeStatusCode) {
            $res['change_status_code'] = $this->changeStatusCode;
        }
        if (null !== $this->newSegment) {
            $res['new_segment'] = $this->newSegment;
        }
        if (null !== $this->passengerNames) {
            $res['passenger_names'] = $this->passengerNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightChange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_desc'])) {
            $model->changeDesc = $map['change_desc'];
        }
        if (isset($map['change_status'])) {
            $model->changeStatus = $map['change_status'];
        }
        if (isset($map['change_status_code'])) {
            $model->changeStatusCode = $map['change_status_code'];
        }
        if (isset($map['new_segment'])) {
            $model->newSegment = $map['new_segment'];
        }
        if (isset($map['passenger_names'])) {
            if (!empty($map['passenger_names'])) {
                $model->passengerNames = $map['passenger_names'];
            }
        }

        return $model;
    }
}
