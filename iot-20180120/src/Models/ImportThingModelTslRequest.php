<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ImportThingModelTslRequest extends Model
{
    /**
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

    /**
     * @var string
     */
    public $functionBlockName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example {"schema":"https://iotx-tsl.oss-ap-southeast-1.aliyuncs.com/schema.json","profile":{"productKey":"a14TeW****"},"properties":[]}
     *
     * @var string
     */
    public $tslStr;

    /**
     * @example https://iotx-pop-dsl.oss-cn-shanghai.aliyuncs.com/thing/a14TeWI****\/model.json?Expires=1581947119...
     *
     * @var string
     */
    public $tslUrl;
    protected $_name = [
        'functionBlockId'   => 'FunctionBlockId',
        'functionBlockName' => 'FunctionBlockName',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'resourceGroupId'   => 'ResourceGroupId',
        'tslStr'            => 'TslStr',
        'tslUrl'            => 'TslUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
        }
        if (null !== $this->functionBlockName) {
            $res['FunctionBlockName'] = $this->functionBlockName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tslStr) {
            $res['TslStr'] = $this->tslStr;
        }
        if (null !== $this->tslUrl) {
            $res['TslUrl'] = $this->tslUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportThingModelTslRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }
        if (isset($map['FunctionBlockName'])) {
            $model->functionBlockName = $map['FunctionBlockName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TslStr'])) {
            $model->tslStr = $map['TslStr'];
        }
        if (isset($map['TslUrl'])) {
            $model->tslUrl = $map['TslUrl'];
        }

        return $model;
    }
}
