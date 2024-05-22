<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeterImsMpsAiUsageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1656995036
     *
     * @var int
     */
    public $endTs;

    /**
     * @description This parameter is required.
     *
     * @example 86400
     *
     * @var int
     */
    public $interval;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is required.
     *
     * @example 1654403036
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'endTs'    => 'EndTs',
        'interval' => 'Interval',
        'region'   => 'Region',
        'startTs'  => 'StartTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterImsMpsAiUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
