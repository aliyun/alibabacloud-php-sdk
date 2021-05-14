<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSwitchNetworkResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vpcInfos
     */
    public $vpcInfos;
    protected $_name = [
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'vpcInfos'  => 'VpcInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcInfos'])) {
            $model->vpcInfos = vpcInfos::fromMap($map['VpcInfos']);
        }

        return $model;
    }
}
