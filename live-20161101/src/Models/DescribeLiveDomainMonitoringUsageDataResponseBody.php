<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody\monitoringData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainMonitoringUsageDataResponseBody extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range.
     *
     * @example 2022-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the monitoring session.
     *
     * @example e62af24d-a354-3b0c-9f1f-da592c4b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The live monitoring data.
     *
     * @var monitoringData
     */
    public $monitoringData;

    /**
     * @description The region of the live center.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The request ID.
     *
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range.
     *
     * @example 2022-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'monitoringData' => 'MonitoringData',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->monitoringData) {
            $res['MonitoringData'] = null !== $this->monitoringData ? $this->monitoringData->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainMonitoringUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MonitoringData'])) {
            $model->monitoringData = monitoringData::fromMap($map['MonitoringData']);
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
