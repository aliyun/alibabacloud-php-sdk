<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCDNStatisSumResponseBody\CDNStatisList;

use AlibabaCloud\Dara\Model;

class CDNMetric extends Model
{
    /**
     * @var int
     */
    public $bpsDataDomesticValue;

    /**
     * @var int
     */
    public $bpsDataOverseasValue;

    /**
     * @var int
     */
    public $bpsDataValue;

    /**
     * @var int
     */
    public $flowDataDomesticValue;

    /**
     * @var int
     */
    public $flowDataOverseasValue;

    /**
     * @var int
     */
    public $flowDataValue;

    /**
     * @var string
     */
    public $statTime;
    protected $_name = [
        'bpsDataDomesticValue' => 'BpsDataDomesticValue',
        'bpsDataOverseasValue' => 'BpsDataOverseasValue',
        'bpsDataValue' => 'BpsDataValue',
        'flowDataDomesticValue' => 'FlowDataDomesticValue',
        'flowDataOverseasValue' => 'FlowDataOverseasValue',
        'flowDataValue' => 'FlowDataValue',
        'statTime' => 'StatTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsDataDomesticValue) {
            $res['BpsDataDomesticValue'] = $this->bpsDataDomesticValue;
        }

        if (null !== $this->bpsDataOverseasValue) {
            $res['BpsDataOverseasValue'] = $this->bpsDataOverseasValue;
        }

        if (null !== $this->bpsDataValue) {
            $res['BpsDataValue'] = $this->bpsDataValue;
        }

        if (null !== $this->flowDataDomesticValue) {
            $res['FlowDataDomesticValue'] = $this->flowDataDomesticValue;
        }

        if (null !== $this->flowDataOverseasValue) {
            $res['FlowDataOverseasValue'] = $this->flowDataOverseasValue;
        }

        if (null !== $this->flowDataValue) {
            $res['FlowDataValue'] = $this->flowDataValue;
        }

        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
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
        if (isset($map['BpsDataDomesticValue'])) {
            $model->bpsDataDomesticValue = $map['BpsDataDomesticValue'];
        }

        if (isset($map['BpsDataOverseasValue'])) {
            $model->bpsDataOverseasValue = $map['BpsDataOverseasValue'];
        }

        if (isset($map['BpsDataValue'])) {
            $model->bpsDataValue = $map['BpsDataValue'];
        }

        if (isset($map['FlowDataDomesticValue'])) {
            $model->flowDataDomesticValue = $map['FlowDataDomesticValue'];
        }

        if (isset($map['FlowDataOverseasValue'])) {
            $model->flowDataOverseasValue = $map['FlowDataOverseasValue'];
        }

        if (isset($map['FlowDataValue'])) {
            $model->flowDataValue = $map['FlowDataValue'];
        }

        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        return $model;
    }
}
