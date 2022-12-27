<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataByLayerResponseBody\qpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The number of requests in the Chinese mainland.
     *
     * @example 12
     *
     * @var string
     */
    public $accDomesticValue;

    /**
     * @description The number of requests in the Chinese mainland.
     *
     * @example 44
     *
     * @var string
     */
    public $accOverseasValue;

    /**
     * @description The total number of requests.
     *
     * @example 56
     *
     * @var string
     */
    public $accValue;

    /**
     * @description The number of queries per second in the Chinese mainland.
     *
     * @example 0.12
     *
     * @var string
     */
    public $domesticValue;

    /**
     * @description The number of queries per second outside the Chinese mainland.
     *
     * @example 0.44
     *
     * @var string
     */
    public $overseasValue;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total number of queries per second in all regions.
     *
     * @example 0.56
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'accDomesticValue' => 'AccDomesticValue',
        'accOverseasValue' => 'AccOverseasValue',
        'accValue'         => 'AccValue',
        'domesticValue'    => 'DomesticValue',
        'overseasValue'    => 'OverseasValue',
        'timeStamp'        => 'TimeStamp',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accDomesticValue) {
            $res['AccDomesticValue'] = $this->accDomesticValue;
        }
        if (null !== $this->accOverseasValue) {
            $res['AccOverseasValue'] = $this->accOverseasValue;
        }
        if (null !== $this->accValue) {
            $res['AccValue'] = $this->accValue;
        }
        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
        }
        if (null !== $this->overseasValue) {
            $res['OverseasValue'] = $this->overseasValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccDomesticValue'])) {
            $model->accDomesticValue = $map['AccDomesticValue'];
        }
        if (isset($map['AccOverseasValue'])) {
            $model->accOverseasValue = $map['AccOverseasValue'];
        }
        if (isset($map['AccValue'])) {
            $model->accValue = $map['AccValue'];
        }
        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
        }
        if (isset($map['OverseasValue'])) {
            $model->overseasValue = $map['OverseasValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
