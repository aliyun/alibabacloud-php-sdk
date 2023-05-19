<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUsageDataResponseBody\usageDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainUsageDataResponseBody extends Model
{
    /**
     * @description data.field
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description data.area
     *
     * @example /
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The time interval between the data entries to return. Unit: seconds.
     *
     * The time granularity varies with the maximum time range per query. Valid values: 300 (5 minutes), 3600 (1 hour), and 86400 (1 day). For more information, see **Usage notes**.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The accelerated domain name.
     *
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the content returned.
     *
     * @example B955107D-E658-4E77-B913-E0AC3D31693E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example static
     *
     * @var string
     */
    public $type;

    /**
     * @description The billable region where the usage data was collected.
     *
     * @var usageDataPerInterval
     */
    public $usageDataPerInterval;
    protected $_name = [
        'area'                 => 'Area',
        'dataInterval'         => 'DataInterval',
        'domainName'           => 'DomainName',
        'endTime'              => 'EndTime',
        'requestId'            => 'RequestId',
        'startTime'            => 'StartTime',
        'type'                 => 'Type',
        'usageDataPerInterval' => 'UsageDataPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usageDataPerInterval) {
            $res['UsageDataPerInterval'] = null !== $this->usageDataPerInterval ? $this->usageDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsageDataPerInterval'])) {
            $model->usageDataPerInterval = usageDataPerInterval::fromMap($map['UsageDataPerInterval']);
        }

        return $model;
    }
}
