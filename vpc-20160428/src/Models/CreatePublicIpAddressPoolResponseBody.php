<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreatePublicIpAddressPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $publicIpAddressPoolId;
    /**
     * @var string
     */
    public $pulbicIpAddressPoolId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
        'pulbicIpAddressPoolId' => 'PulbicIpAddressPoolId',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }

        if (null !== $this->pulbicIpAddressPoolId) {
            $res['PulbicIpAddressPoolId'] = $this->pulbicIpAddressPoolId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }

        if (isset($map['PulbicIpAddressPoolId'])) {
            $model->pulbicIpAddressPoolId = $map['PulbicIpAddressPoolId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
