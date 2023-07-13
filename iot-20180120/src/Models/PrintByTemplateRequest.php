<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PrintByTemplateRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
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
     * @description The device ID.
     *
     * > If you specify this parameter, you do not need to specify the **ProductKey** and **DeviceName** parameters. **IotId** specifies a globally unique identifier (GUID) of the device, which corresponds to a combination of **ProductKey** and **DeviceName**. If you specify the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The instance ID.
     *
     * You do not need to specify this parameter.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The template parameters. You can obtain the template of receipts in the Letter Sending Service console, and configure parameters in the template to create a custom receipt that you want to print.
     *
     * @var string
     */
    public $paramsJsonString;

    /**
     * @description The unique identifier of the product to which the device belongs.
     *
     * > If you specify the **ProductKey** parameter, you must also specify the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The template identifier. You can obtain the template identifier in the Letter Sending Service console.
     *
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
