<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PrintByTemplateRequest extends Model
{
    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $historyPrintTopic;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $paramsJsonString;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example test
     *
     * @var string
     */
    public $templateBizCode;
    protected $_name = [
        'deviceName'        => 'DeviceName',
        'historyPrintTopic' => 'HistoryPrintTopic',
        'iotId'             => 'IotId',
        'iotInstanceId'     => 'IotInstanceId',
        'paramsJsonString'  => 'ParamsJsonString',
        'productKey'        => 'ProductKey',
        'templateBizCode'   => 'TemplateBizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->historyPrintTopic) {
            $res['HistoryPrintTopic'] = $this->historyPrintTopic;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->paramsJsonString) {
            $res['ParamsJsonString'] = $this->paramsJsonString;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->templateBizCode) {
            $res['TemplateBizCode'] = $this->templateBizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrintByTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['HistoryPrintTopic'])) {
            $model->historyPrintTopic = $map['HistoryPrintTopic'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ParamsJsonString'])) {
            $model->paramsJsonString = $map['ParamsJsonString'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TemplateBizCode'])) {
            $model->templateBizCode = $map['TemplateBizCode'];
        }

        return $model;
    }
}
