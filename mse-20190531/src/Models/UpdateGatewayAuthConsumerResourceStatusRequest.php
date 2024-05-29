<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayAuthConsumerResourceStatusRequest extends Model
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
     * @description The ID of the consumer.
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
     * @example gw-2a99625886d54722be94d92e9a69****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The list of IDs of the authorized resources that a user wants to update.
     *
     * This parameter is required.
     * @example 1,2,3,4
     *
     * @var string
     */
    public $idList;

    /**
     * @description The resource authorization status. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $resourceStatus;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'consumerId'      => 'ConsumerId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'idList'          => 'IdList',
        'resourceStatus'  => 'ResourceStatus',
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
        if (null !== $this->idList) {
            $res['IdList'] = $this->idList;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayAuthConsumerResourceStatusRequest
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
        if (isset($map['IdList'])) {
            $model->idList = $map['IdList'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        return $model;
    }
}
