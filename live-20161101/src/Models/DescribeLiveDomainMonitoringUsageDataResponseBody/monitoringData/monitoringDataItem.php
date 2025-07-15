<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody\monitoringData;

use AlibabaCloud\Tea\Model;

class monitoringDataItem extends Model
{
    /**
     * @description The domain name. This field is valid only when you specify domain for the **SplitBy** parameter.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The duration. Unit: minutes.
     *
     * @example 2000
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the monitoring session. This field is valid only when you specify instance for the **SplitBy** parameter.
     *
     * @example e62af24d-a354-3b0c-9f1f-da592c4b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region of the live center. This field is valid only when you specify Region for the **SplitBy** parameter.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The resolution. This field is valid only when you specify resolution for the **SplitBy** parameter.
     *
     * @example 720P
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2022-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'domainName' => 'DomainName',
        'duration' => 'Duration',
        'instanceId' => 'InstanceId',
        'region' => 'Region',
        'resolution' => 'Resolution',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitoringDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
