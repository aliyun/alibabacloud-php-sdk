<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryOrderResponseBody\data\itemInfo\cancelPolicy;

use AlibabaCloud\Dara\Model;

class penalties extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $penaltyType;

    /**
     * @var string
     */
    public $penaltyValue;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'currency' => 'Currency',
        'end' => 'End',
        'penaltyType' => 'PenaltyType',
        'penaltyValue' => 'PenaltyValue',
        'start' => 'Start',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->penaltyType) {
            $res['PenaltyType'] = $this->penaltyType;
        }

        if (null !== $this->penaltyValue) {
            $res['PenaltyValue'] = $this->penaltyValue;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['PenaltyType'])) {
            $model->penaltyType = $map['PenaltyType'];
        }

        if (isset($map['PenaltyValue'])) {
            $model->penaltyValue = $map['PenaltyValue'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
