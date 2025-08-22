<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnDomainIpaBpsDataRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $fixTimeGap;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $ispNameEn;

    /**
     * @var string
     */
    public $locationNameEn;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeMerge;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'fixTimeGap' => 'FixTimeGap',
        'interval' => 'Interval',
        'ispNameEn' => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'startTime' => 'StartTime',
        'timeMerge' => 'TimeMerge',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
