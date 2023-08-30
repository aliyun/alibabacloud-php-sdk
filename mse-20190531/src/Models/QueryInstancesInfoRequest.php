<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class QueryInstancesInfoRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the cluster.
     *
     * @example mse-09k1q11****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-tl32g1u9k01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the order.
     *
     * @example 20574710974****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId'      => 'ClusterId',
        'instanceId'     => 'InstanceId',
        'orderId'        => 'OrderId',
        'regionId'       => 'RegionId',
        'requestPars'    => 'RequestPars',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstancesInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
