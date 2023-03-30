<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayAuthConsumerResourceRequest extends Model
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
     * @example gw-ubuwqygbq4783gqb2y3f87q****
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
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'consumerId'      => 'ConsumerId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'idList'          => 'IdList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayAuthConsumerResourceRequest
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

        return $model;
    }
}
