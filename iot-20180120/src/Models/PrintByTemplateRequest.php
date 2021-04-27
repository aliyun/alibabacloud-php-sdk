<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PrintByTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $paramsJsonString;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $templateBizCode;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'paramsJsonString' => 'ParamsJsonString',
        'iotId'            => 'IotId',
        'projectCode'      => 'ProjectCode',
        'iotInstanceId'    => 'IotInstanceId',
        'templateBizCode'  => 'TemplateBizCode',
        'productKey'       => 'ProductKey',
        'deviceName'       => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsJsonString) {
            $res['ParamsJsonString'] = $this->paramsJsonString;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->templateBizCode) {
            $res['TemplateBizCode'] = $this->templateBizCode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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
        if (isset($map['ParamsJsonString'])) {
            $model->paramsJsonString = $map['ParamsJsonString'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TemplateBizCode'])) {
            $model->templateBizCode = $map['TemplateBizCode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
