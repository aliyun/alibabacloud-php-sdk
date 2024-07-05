<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainRealTimeDetailDataRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify a maximum of 20 accelerated domain names in each call. Separate domain names with commas (,).
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
     * @example 2019-01-23T12:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of data that you want to query. You can specify multiple data types and separate them with commas (,). Valid values:
     *
     * This parameter is required.
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the Internet service provider (ISP).
     *
     * @example unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region. If you do not specify a region, data in all regions is queried.
     *
     * @example shanghai
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description Specifies whether to return a summary value. Valid values:
     *
     * true false (default)
     * @example false
     *
     * @var string
     */
    public $merge;

    /**
     * @description Specifies whether to return a summary value. Valid values:
     *
     *   **true**: groups the results by domain name and merges the results by region and ISP.
     *   **false**: groups the results by domain name.
     *
     * Default value: **false**.
     * @example true
     *
     * @var string
     */
    public $mergeLocIsp;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2019-01-23T12:35:12Z
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
        'ownerId'        => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainRealTimeDetailDataRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
