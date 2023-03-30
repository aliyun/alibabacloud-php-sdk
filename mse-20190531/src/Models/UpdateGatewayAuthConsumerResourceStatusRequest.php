<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayAuthConsumerResourceStatusRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 2
     *
     * @var int
     */
    public $consumerId;

    /**
     * @example gw-2a99625886d54722be94d92e9a69****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 1,2,3,4
     *
     * @var string
     */
    public $idList;

    /**
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
