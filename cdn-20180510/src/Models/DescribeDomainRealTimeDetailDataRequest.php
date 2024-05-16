<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeDetailDataRequest extends Model
{
    /**
     * @description The accelerated domain name that you want to query.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of data that you want to query. You can specify multiple data types and separate them with commas (,). Valid values:
     *
     *   **qps**: queries per second (QPS)
     *   **bps**: bandwidth
     *   **http_code**: HTTP status code
     *
     * This parameter is required.
     * @example qps
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the Internet service provider (ISP). You can call the [DescribeCdnRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query ISPs. If you do not specify an ISP, data of all ISPs is queried.
     *
     * @example telecom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region. If you do not specify a region, data in all regions is queried. You can call the [DescribeCdnRegionAndIsp](https://help.aliyun.com/document_detail/91077.html) operation to query regions.
     *
     * @example Guangdong
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description Specifies whether to return a summary value based on ISPs and regions. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     * @example false
     *
     * @var string
     */
    public $merge;

    /**
     * @description Specifies whether to return a summary value based on ISPs and regions. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     * @example false
     *
     * @var string
     */
    public $mergeLocIsp;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
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
