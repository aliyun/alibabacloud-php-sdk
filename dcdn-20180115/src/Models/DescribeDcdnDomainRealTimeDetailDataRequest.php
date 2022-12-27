<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeDetailDataRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @example unicom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @example true
     *
     * @var string
     */
    public $merge;

    /**
     * @example true
     *
     * @var string
     */
    public $mergeLocIsp;

    /**
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
