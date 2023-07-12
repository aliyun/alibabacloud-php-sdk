<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ImportThingModelTslRequest extends Model
{
    /**
     * @var string
     */
    public $functionBlockId;

    /**
     * @var string
     */
    public $functionBlockName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tslStr;

    /**
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
        Model::validateRequired('productKey', $this->productKey, true);
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
