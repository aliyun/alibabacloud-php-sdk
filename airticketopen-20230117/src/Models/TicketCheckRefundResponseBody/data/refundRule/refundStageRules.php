<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule\refundStageRules\from;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule\refundStageRules\to;

class refundStageRules extends Model
{
    /**
     * @var float
     */
    public $fee;

    /**
     * @var int
     */
    public $feeBase;

    /**
     * @var int
     */
    public $feeType;

    /**
     * @var from
     */
    public $from;

    /**
     * @var to
     */
    public $to;
    protected $_name = [
        'fee' => 'Fee',
        'feeBase' => 'FeeBase',
        'feeType' => 'FeeType',
        'from' => 'From',
        'to' => 'To',
    ];

    public function validate()
    {
        if (null !== $this->from) {
            $this->from->validate();
        }
        if (null !== $this->to) {
            $this->to->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }

        if (null !== $this->feeBase) {
            $res['FeeBase'] = $this->feeBase;
        }

        if (null !== $this->feeType) {
            $res['FeeType'] = $this->feeType;
        }

        if (null !== $this->from) {
            $res['From'] = null !== $this->from ? $this->from->toArray($noStream) : $this->from;
        }

        if (null !== $this->to) {
            $res['To'] = null !== $this->to ? $this->to->toArray($noStream) : $this->to;
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
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }

        if (isset($map['FeeBase'])) {
            $model->feeBase = $map['FeeBase'];
        }

        if (isset($map['FeeType'])) {
            $model->feeType = $map['FeeType'];
        }

        if (isset($map['From'])) {
            $model->from = from::fromMap($map['From']);
        }

        if (isset($map['To'])) {
            $model->to = to::fromMap($map['To']);
        }

        return $model;
    }
}
