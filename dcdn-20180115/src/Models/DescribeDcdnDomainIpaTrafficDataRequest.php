<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainIpaTrafficDataRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example false
     *
     * @var string
     */
    public $fixTimeGap;

    /**
     * @example 300
     *
     * @var string
     */
    public $interval;

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
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $timeMerge;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'fixTimeGap'     => 'FixTimeGap',
        'interval'       => 'Interval',
        'ispNameEn'      => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'startTime'      => 'StartTime',
        'timeMerge'      => 'TimeMerge',
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
        if (null !== $this->fixTimeGap) {
            $res['FixTimeGap'] = $this->fixTimeGap;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeMerge) {
            $res['TimeMerge'] = $this->timeMerge;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainIpaTrafficDataRequest
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
        if (isset($map['FixTimeGap'])) {
            $model->fixTimeGap = $map['FixTimeGap'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeMerge'])) {
            $model->timeMerge = $map['TimeMerge'];
        }

        return $model;
    }
}
