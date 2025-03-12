<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventListResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1670918400
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 300
     *
     * @var int
     */
    public $maxQps;

    /**
     * @example 1666083600
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'domain'    => 'Domain',
        'endTime'   => 'EndTime',
        'maxQps'    => 'MaxQps',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
