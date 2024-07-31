<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListMeasureDataRequest extends Model
{
    /**
     * @description The measurement component.
     *
     *   This parameter is set to Count if the DomainCode parameter is set to DideAlarmPhone or DideAlarmSms. In this case, statistics on the number of phone calls or text messages that are used to send alert notifications are collected.
     *
     * This parameter is required.
     * @example Count
     *
     * @var string
     */
    public $componentCode;

    /**
     * @description The item to be measured. Valid values:
     *
     *   DideAlarmPhone: phone call-based alerts
     *   DideAlarmSms: text message-based alerts
     *
     * This parameter is required.
     * @example DideAlarmPhone
     *
     * @var string
     */
    public $domainCode;

    /**
     * @description The end timestamp of the measurement period, in milliseconds. The measurement period is calculated in days. You can query only the data within the last 30 days.
     *
     * This parameter is required.
     * @example 1717430400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start timestamp of the measurement period, in milliseconds. The measurement period is calculated in days. You can query only the data within the last 30 days.
     *
     * This parameter is required.
     * @example 1717344000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'domainCode'    => 'DomainCode',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMeasureDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
