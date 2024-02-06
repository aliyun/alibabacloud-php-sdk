<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEpnBandwitdhByInternetChargeTypeResponseBody extends Model
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
     * @example BandwidthByDay
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The request ID.
     *
     * @example 216BCED0-E055-5DDB-8E06-4084A62A4A44
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the monitoring data was queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
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
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponseBody
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
