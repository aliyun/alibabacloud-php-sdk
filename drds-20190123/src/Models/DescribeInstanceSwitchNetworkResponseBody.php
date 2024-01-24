<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSwitchNetworkResponseBody extends Model
{
    /**
     * @description Indicates the ID of the request.
     *
     * @example 03E12FE3-1638-483E-A9B6-1A9120SER56T
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates the information about the virtual private cloud (VPC) in which the instance is deployed.
     *
     * @var vpcInfos
     */
    public $vpcInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'vpcInfos'  => 'VpcInfos',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vpcInfos) {
            $res['VpcInfos'] = null !== $this->vpcInfos ? $this->vpcInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSwitchNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VpcInfos'])) {
            $model->vpcInfos = vpcInfos::fromMap($map['VpcInfos']);
        }

        return $model;
    }
}
