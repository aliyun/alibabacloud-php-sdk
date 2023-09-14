<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappPhoneNumberMetricRequest extends Model
{
    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 1693407714687
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
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 1693107714687
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'end'         => 'End',
        'granularity' => 'Granularity',
        'isvCode'     => 'IsvCode',
        'phoneNumber' => 'PhoneNumber',
        'start'       => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatappPhoneNumberMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
