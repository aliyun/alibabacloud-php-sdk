<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandwitdhByInternetChargeTypeResponseBody extends Model
{
    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 123
     *
     * @var int
     */
    public $bandwidthValue;

    /**
     * @description The metering method. Valid values:
     *
     *   BandwidthByDay: Pay by daily peak bandwidth
     *   95BandwidthByMonth: Pay by monthly 95th percentile bandwidth
     *   PayByBandwidth4thMonth: Pay by monthly fourth peak bandwidth
     *   PayByBandwidth: Pay by fixed bandwidth
     *
     * You can specify only one metering method for network usage and cannot overwrite the existing metering method.
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use the ID to troubleshoot issues.
     *
     * @example 08027633-8501-5A36-B90D-F7C38B5EC75D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp. The time follows the ISO 8601 standard. The time is displayed in UTC. Example: 2016-10-20T04:00:00Z.
     *
     * @example 2019-10-12T05:45:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bandwidthValue'     => 'BandwidthValue',
        'internetChargeType' => 'InternetChargeType',
        'requestId'          => 'RequestId',
        'timeStamp'          => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthValue) {
            $res['BandwidthValue'] = $this->bandwidthValue;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthValue'])) {
            $model->bandwidthValue = $map['BandwidthValue'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
