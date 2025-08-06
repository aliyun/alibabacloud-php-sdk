<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeDomainBpsDataResponseBody\bpsDataPerInterval;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeDomainBpsDataResponseBody\supplyBpsDatas;

class DescribeDomainBpsDataResponseBody extends Model
{
    /**
     * @var bpsDataPerInterval
     */
    public $bpsDataPerInterval;

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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var supplyBpsDatas
     */
    public $supplyBpsDatas;
    protected $_name = [
        'bpsDataPerInterval' => 'BpsDataPerInterval',
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'supplyBpsDatas' => 'SupplyBpsDatas',
    ];

    public function validate()
    {
        if (null !== $this->bpsDataPerInterval) {
            $this->bpsDataPerInterval->validate();
        }
        if (null !== $this->supplyBpsDatas) {
            $this->supplyBpsDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsDataPerInterval) {
            $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toArray($noStream) : $this->bpsDataPerInterval;
        }

        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->supplyBpsDatas) {
            $res['SupplyBpsDatas'] = null !== $this->supplyBpsDatas ? $this->supplyBpsDatas->toArray($noStream) : $this->supplyBpsDatas;
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
        if (isset($map['BpsDataPerInterval'])) {
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }

        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SupplyBpsDatas'])) {
            $model->supplyBpsDatas = supplyBpsDatas::fromMap($map['SupplyBpsDatas']);
        }

        return $model;
    }
}
