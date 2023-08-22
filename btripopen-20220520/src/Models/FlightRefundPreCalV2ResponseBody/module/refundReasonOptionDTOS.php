<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class refundReasonOptionDTOS extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @example 2
     *
     * @var int
     */
    public $reasonType;

    /**
     * @example true
     *
     * @var bool
     */
    public $volunteer;
    protected $_name = [
        'reason'     => 'reason',
        'reasonType' => 'reason_type',
        'volunteer'  => 'volunteer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->reasonType) {
            $res['reason_type'] = $this->reasonType;
        }
        if (null !== $this->volunteer) {
            $res['volunteer'] = $this->volunteer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundReasonOptionDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['reason_type'])) {
            $model->reasonType = $map['reason_type'];
        }
        if (isset($map['volunteer'])) {
            $model->volunteer = $map['volunteer'];
        }

        return $model;
    }
}
