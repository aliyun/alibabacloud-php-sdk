<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyPolicyResponseBody\policyList;
use AlibabaCloud\Tea\Model;

class DescribeHybridProxyPolicyResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @var policyList[]
     */
    public $policyList;

    /**
     * @example F7A1B40A-7EED-55A0-BCBC-2F83A486F0AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'      => 'Count',
        'policyList' => 'PolicyList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->policyList) {
            $res['PolicyList'] = [];
            if (null !== $this->policyList && \is_array($this->policyList)) {
                $n = 0;
                foreach ($this->policyList as $item) {
                    $res['PolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridProxyPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['PolicyList'])) {
            if (!empty($map['PolicyList'])) {
                $model->policyList = [];
                $n                 = 0;
                foreach ($map['PolicyList'] as $item) {
                    $model->policyList[$n++] = null !== $item ? policyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
