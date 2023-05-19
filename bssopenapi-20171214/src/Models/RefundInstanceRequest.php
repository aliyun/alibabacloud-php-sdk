<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RefundInstanceRequest extends Model
{
    /**
     * @description This parameter is required for scenarios that need idempotence. The UUID that is used to ensure the idempotence of the request.
     *
     * @example 793F021C-B589-1225-82A9-99232AEBE494
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required for unsubscription scenarios. Valid values: 1 and 0. A value of 1 specifies that the instance is immediately released. A value of 0 specifies that the instance is shut down based on the shutdown policy. This parameter is supported only for specified services. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $immediatelyRelease;

    /**
     * @description The ID of the instance. This parameter is required for unsubscription scenarios. Do not specify a custom name for this parameter.
     *
     * @example i-bp1etb69sqxgl4*******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The code of the service. This parameter is required for unsubscription scenarios.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service. This parameter is required for unsubscription scenarios. Unless otherwise specified, set this parameter to an empty string.
     *
     * @example ”“
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'immediatelyRelease' => 'ImmediatelyRelease',
        'instanceId'         => 'InstanceId',
        'productCode'        => 'ProductCode',
        'productType'        => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->immediatelyRelease) {
            $res['ImmediatelyRelease'] = $this->immediatelyRelease;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ImmediatelyRelease'])) {
            $model->immediatelyRelease = $map['ImmediatelyRelease'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
