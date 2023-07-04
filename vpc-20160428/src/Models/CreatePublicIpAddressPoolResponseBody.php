<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePublicIpAddressPoolResponseBody extends Model
{
    /**
     * @description The ID of the IP address pool.
     *
     * @example pippool-6wetvn6fumkgycssx****
     *
     * @var string
     */
    public $pulbicIpAddressPoolId;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the IP address pool belongs.
     *
     * @example rg-acfmxazb4pcdvf****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'pulbicIpAddressPoolId' => 'PulbicIpAddressPoolId',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return CreatePublicIpAddressPoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
