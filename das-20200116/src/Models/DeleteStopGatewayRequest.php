<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DeleteStopGatewayRequest extends Model
{
    /**
     * @description The ID that can uniquely identify the DBGateway. You can obtain the DBGateway ID by calling the [DescribeCloudbenchTask](https://help.aliyun.com/document_detail/230669.html) operation. The DBGateway ID is the value of the **ClientGatewayId** field in the response.
     *
     * This parameter is required.
     * @example 22938c83fcfbced4b4869b9695e3****
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
     * @return DeleteStopGatewayRequest
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
