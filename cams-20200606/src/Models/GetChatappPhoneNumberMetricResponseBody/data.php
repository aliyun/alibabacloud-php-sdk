<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappPhoneNumberMetricResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $deliveredCount;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var int
     */
    public $sentCount;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'deliveredCount' => 'DeliveredCount',
        'end' => 'End',
        'granularity' => 'Granularity',
        'phoneNumber' => 'PhoneNumber',
        'sentCount' => 'SentCount',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveredCount) {
            $res['DeliveredCount'] = $this->deliveredCount;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->sentCount) {
            $res['SentCount'] = $this->sentCount;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['DeliveredCount'])) {
            $model->deliveredCount = $map['DeliveredCount'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['SentCount'])) {
            $model->sentCount = $map['SentCount'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
