<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetThingModelTslPublishedRequest extends Model
{
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
     * @var bool
     */
    public $simple;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $functionBlockId;
    protected $_name = [
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
        'resourceGroupId' => 'ResourceGroupId',
        'simple'          => 'Simple',
        'modelVersion'    => 'ModelVersion',
        'functionBlockId' => 'FunctionBlockId',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->simple) {
            $res['Simple'] = $this->simple;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingModelTslPublishedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Simple'])) {
            $model->simple = $map['Simple'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }

        return $model;
    }
}
