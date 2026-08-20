<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule\refundStageRules;

use AlibabaCloud\Dara\Model;

class from extends Model
{
    /**
     * @var int
     */
    public $anchor;

    /**
     * @var string
     */
    public $fixedTime;

    /**
     * @var string
     */
    public $offsetDayOfTime;

    /**
     * @var int
     */
    public $offsetUnit;

    /**
     * @var int
     */
    public $offsetValue;
    protected $_name = [
        'anchor' => 'Anchor',
        'fixedTime' => 'FixedTime',
        'offsetDayOfTime' => 'OffsetDayOfTime',
        'offsetUnit' => 'OffsetUnit',
        'offsetValue' => 'OffsetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchor) {
            $res['Anchor'] = $this->anchor;
        }

        if (null !== $this->fixedTime) {
            $res['FixedTime'] = $this->fixedTime;
        }

        if (null !== $this->offsetDayOfTime) {
            $res['OffsetDayOfTime'] = $this->offsetDayOfTime;
        }

        if (null !== $this->offsetUnit) {
            $res['OffsetUnit'] = $this->offsetUnit;
        }

        if (null !== $this->offsetValue) {
            $res['OffsetValue'] = $this->offsetValue;
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
        if (isset($map['Anchor'])) {
            $model->anchor = $map['Anchor'];
        }

        if (isset($map['FixedTime'])) {
            $model->fixedTime = $map['FixedTime'];
        }

        if (isset($map['OffsetDayOfTime'])) {
            $model->offsetDayOfTime = $map['OffsetDayOfTime'];
        }

        if (isset($map['OffsetUnit'])) {
            $model->offsetUnit = $map['OffsetUnit'];
        }

        if (isset($map['OffsetValue'])) {
            $model->offsetValue = $map['OffsetValue'];
        }

        return $model;
    }
}
