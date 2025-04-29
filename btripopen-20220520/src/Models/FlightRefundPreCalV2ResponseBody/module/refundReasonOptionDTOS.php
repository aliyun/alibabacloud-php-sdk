<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class refundReasonOptionDTOS extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $reasonType;

    /**
     * @var bool
     */
    public $volunteer;
    protected $_name = [
        'reason' => 'reason',
        'reasonType' => 'reason_type',
        'volunteer' => 'volunteer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
