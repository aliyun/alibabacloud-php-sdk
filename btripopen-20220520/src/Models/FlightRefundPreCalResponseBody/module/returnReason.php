<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module;

use AlibabaCloud\Dara\Model;

class returnReason extends Model
{
    /**
     * @var string
     */
    public $extendDesc;

    /**
     * @var int
     */
    public $person;

    /**
     * @var int
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonShow;

    /**
     * @var int
     */
    public $reasonType;

    /**
     * @var int
     */
    public $volunteer;
    protected $_name = [
        'extendDesc' => 'extend_desc',
        'person' => 'person',
        'reasonCode' => 'reason_code',
        'reasonShow' => 'reason_show',
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
        if (null !== $this->extendDesc) {
            $res['extend_desc'] = $this->extendDesc;
        }

        if (null !== $this->person) {
            $res['person'] = $this->person;
        }

        if (null !== $this->reasonCode) {
            $res['reason_code'] = $this->reasonCode;
        }

        if (null !== $this->reasonShow) {
            $res['reason_show'] = $this->reasonShow;
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
        if (isset($map['extend_desc'])) {
            $model->extendDesc = $map['extend_desc'];
        }

        if (isset($map['person'])) {
            $model->person = $map['person'];
        }

        if (isset($map['reason_code'])) {
            $model->reasonCode = $map['reason_code'];
        }

        if (isset($map['reason_show'])) {
            $model->reasonShow = $map['reason_show'];
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
