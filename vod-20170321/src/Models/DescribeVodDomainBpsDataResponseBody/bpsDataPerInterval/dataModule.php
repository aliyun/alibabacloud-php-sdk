<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $domesticValue;

    /**
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @var string
     */
    public $httpsValue;

    /**
     * @var string
     */
    public $overseasValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'domesticValue' => 'DomesticValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
        'httpsValue' => 'HttpsValue',
        'overseasValue' => 'OverseasValue',
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
        }

        if (null !== $this->httpsDomesticValue) {
            $res['HttpsDomesticValue'] = $this->httpsDomesticValue;
        }

        if (null !== $this->httpsOverseasValue) {
            $res['HttpsOverseasValue'] = $this->httpsOverseasValue;
        }

        if (null !== $this->httpsValue) {
            $res['HttpsValue'] = $this->httpsValue;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
        }

        if (isset($map['HttpsDomesticValue'])) {
            $model->httpsDomesticValue = $map['HttpsDomesticValue'];
        }

        if (isset($map['HttpsOverseasValue'])) {
            $model->httpsOverseasValue = $map['HttpsOverseasValue'];
        }

        if (isset($map['HttpsValue'])) {
            $model->httpsValue = $map['HttpsValue'];
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
