<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRTSNativeSDKVvDataShrinkRequest extends Model
{
    /**
     * @description The time granularity. Valid values: 300, 3600, 14400, 28800, and 86400. Unit: seconds. The default value is 300. If you specify an invalid value or do not specify this parameter, the default value is used.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The array of domain names.
     *
     * @var string
     */
    public $domainNameListShrink;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainNameListShrink' => 'DomainNameList',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainNameListShrink) {
            $res['DomainNameList'] = $this->domainNameListShrink;
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
     * @return DescribeRTSNativeSDKVvDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainNameList'])) {
            $model->domainNameListShrink = $map['DomainNameList'];
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
