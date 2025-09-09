<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos;

class DescribeInstanceSwitchNetworkResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var vpcInfos
     */
    public $vpcInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'success' => 'Success',
        'vpcInfos' => 'VpcInfos',
    ];

    public function validate()
    {
        if (null !== $this->vpcInfos) {
            $this->vpcInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->vpcInfos) {
            $res['VpcInfos'] = null !== $this->vpcInfos ? $this->vpcInfos->toArray($noStream) : $this->vpcInfos;
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
