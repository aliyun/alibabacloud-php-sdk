<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesSourceRequest extends Model
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
     * @description The unique ID of the gateway.
     *
     * @example gw-c5d1aadb7df646cfb7065fbf75c1****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var bool
     */
    public $isAll;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1t50e045b5g7i3p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'isAll'           => 'IsAll',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->isAll) {
            $res['IsAll'] = $this->isAll;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKubernetesSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['IsAll'])) {
            $model->isAll = $map['IsAll'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
