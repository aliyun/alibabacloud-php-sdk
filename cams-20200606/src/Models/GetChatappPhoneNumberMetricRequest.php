<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappPhoneNumberMetricRequest extends Model
{
    /**
     * @description The space ID of the RAM user within the ISV account.
     *
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 1693407714687
     *
     * @var int
     */
    public $end;

    /**
     * @description The granularity of the metric.
     *
     * Valid values:
     *
     *   DAILY
     *   HALF_HOUR
     *
     * @example DAILY
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The independent software vendor (ISV) verification code, which is used to verify whether the RAM user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The business phone number.
     *
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
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
