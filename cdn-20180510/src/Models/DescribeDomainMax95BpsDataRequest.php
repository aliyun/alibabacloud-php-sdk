<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainMax95BpsDataRequest extends Model
{
    /**
     * @example month
     *
     * @var string
     */
    public $cycle;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2017-12-22T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2017-12-21T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2017-12-21T10:00:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'cycle'      => 'Cycle',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'timePoint'  => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainMax95BpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
