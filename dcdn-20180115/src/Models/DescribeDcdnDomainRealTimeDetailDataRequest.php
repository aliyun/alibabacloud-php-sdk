<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeDetailDataRequest extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > The end time must be later than the start time, and the maximum time range to query is 10 minutes.
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of information that you want to query. Separate multiple types with commas (,). Valid values:
     *
     *   **qps**: queries per second (QPS)
     *   **bps**: bandwidth
     *   **http_code**: HTTP status code
     *
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the ISP. You can call the [DescribeDcdnRegionAndIsp](~~207199~~) operation to query the ISP name.
     *
     * If you leave this parameter empty, all ISPs are queried.
     * @example unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region. You can call the [DescribeDcdnRegionAndIsp](~~207199~~) operation to query the region name.
     *
     * If you leave this parameter empty, all regions are queried.
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description Specifies whether to return a summary value. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     * @example true
     *
     * @var string
     */
    public $merge;

    /**
     * @description Specifies whether to return a summary value of **LocationNameEn** and **IspNameEn**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     * @example true
     *
     * @var string
     */
    public $mergeLocIsp;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
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
     * @return DescribeDcdnDomainRealTimeDetailDataRequest
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
