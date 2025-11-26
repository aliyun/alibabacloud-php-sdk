<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPrecheckDetailResponseBody\precheckDetail;

class DescribeVpcFirewallPrecheckDetailResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isFound;

    /**
     * @var precheckDetail
     */
    public $precheckDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isFound' => 'IsFound',
        'precheckDetail' => 'PrecheckDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->precheckDetail) {
            $this->precheckDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFound) {
            $res['IsFound'] = $this->isFound;
        }

        if (null !== $this->precheckDetail) {
            $res['PrecheckDetail'] = null !== $this->precheckDetail ? $this->precheckDetail->toArray($noStream) : $this->precheckDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IsFound'])) {
            $model->isFound = $map['IsFound'];
        }

        if (isset($map['PrecheckDetail'])) {
            $model->precheckDetail = precheckDetail::fromMap($map['PrecheckDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
