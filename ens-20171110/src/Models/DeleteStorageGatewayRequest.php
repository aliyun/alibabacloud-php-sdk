<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteStorageGatewayRequest extends Model
{
    /**
     * @description The ID of the gateway.
     *
     * This parameter is required.
     * @example sgw-****
     *
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'gatewayId' => 'GatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStorageGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        return $model;
    }
}
