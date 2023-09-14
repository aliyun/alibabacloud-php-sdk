<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappPhoneNumberMetricResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $deliveredCount;

    /**
     * @example 1667196043904
     *
     * @var int
     */
    public $end;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $granularity;

    /**
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $sentCount;

    /**
     * @example 1669619491000
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'deliveredCount' => 'DeliveredCount',
        'end'            => 'End',
        'granularity'    => 'Granularity',
        'phoneNumber'    => 'PhoneNumber',
        'sentCount'      => 'SentCount',
        'start'          => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
