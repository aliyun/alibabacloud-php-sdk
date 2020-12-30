<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vpcEndpointId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'vpcEndpointId' => 'VpcEndpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcEndpointId) {
            $res['VpcEndpointId'] = $this->vpcEndpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcEndpointId'])) {
            $model->vpcEndpointId = $map['VpcEndpointId'];
        }

        return $model;
    }
}
