<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHitRateDataResponseBody\hitRateInterval;

class DescribeDomainHitRateDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var hitRateInterval
     */
    public $hitRateInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'hitRateInterval' => 'HitRateInterval',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->hitRateInterval) {
            $this->hitRateInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hitRateInterval) {
            $res['HitRateInterval'] = null !== $this->hitRateInterval ? $this->hitRateInterval->toArray($noStream) : $this->hitRateInterval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HitRateInterval'])) {
            $model->hitRateInterval = hitRateInterval::fromMap($map['HitRateInterval']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
