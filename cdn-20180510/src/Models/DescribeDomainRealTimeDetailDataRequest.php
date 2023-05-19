<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeDetailDataRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * >  The end time must be later than the start time. The time range between the end time and the start time cannot exceed 10 minutes.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The metrics that you want to query. You can specify multiple metrics and separate them with commas (,). Valid values:
     *
     *   **qps**: the number of queries per second
     *   **bps**: bandwidth values
     *   **http_code**: HTTP status codes
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The data usage of each ISP and the number of visits in each region.
     *
     * @example qps
     *
     * @var string
     */
    public $field;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDomainRealTimeDetailData**.
     *
     * @example telecom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The ID of the request.
     *
     * @example Guangdong
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The name of the region. You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query the most recent region list.
     *
     * @example false
     *
     * @var string
     */
    public $merge;

    /**
     * @description Queries detailed monitoring data of one or more accelerated domain names at a time.
     *
     * @example false
     *
     * @var string
     */
    public $mergeLocIsp;

    /**
     * @description Specifies whether to merge the results. Valid values:
     *
     *   **true**: merges the results.
     *   **false**: does not merge the results. This is the default value.
     *
     * Default value: **false**.
     * @example 2019-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'field'          => 'Field',
        'ispNameEn'      => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'merge'          => 'Merge',
        'mergeLocIsp'    => 'MergeLocIsp',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->merge) {
            $res['Merge'] = $this->merge;
        }
        if (null !== $this->mergeLocIsp) {
            $res['MergeLocIsp'] = $this->mergeLocIsp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRealTimeDetailDataRequest
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['Merge'])) {
            $model->merge = $map['Merge'];
        }
        if (isset($map['MergeLocIsp'])) {
            $model->mergeLocIsp = $map['MergeLocIsp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
