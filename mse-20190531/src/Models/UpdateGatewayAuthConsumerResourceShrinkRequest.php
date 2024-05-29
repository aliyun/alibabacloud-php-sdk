<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayAuthConsumerResourceShrinkRequest extends Model
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
     * @description The gateway authentication consumer ID.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $consumerId;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     * @example gw-3f97e2989c344f35ab3fd62b19f1****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The gateway authentication consumer ID.
     *
     * @var string
     */
    public $resourceListShrink;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'consumerId'         => 'ConsumerId',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'resourceListShrink' => 'ResourceList',
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
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->resourceListShrink) {
            $res['ResourceList'] = $this->resourceListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayAuthConsumerResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceListShrink = $map['ResourceList'];
        }

        return $model;
    }
}
