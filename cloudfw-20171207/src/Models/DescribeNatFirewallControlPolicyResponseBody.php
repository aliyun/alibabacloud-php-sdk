<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyResponseBody\policys;
use AlibabaCloud\Tea\Model;

class DescribeNatFirewallControlPolicyResponseBody extends Model
{
    /**
     * @description The information about the access control policies.
     *
     * @var policys[]
     */
    public $policys;

    /**
     * @description The request ID.
     *
     * @example F183567D-8A52-5BAE-9472-F1C427378C28
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 28
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'policys'    => 'Policys',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policys) {
            $res['Policys'] = [];
            if (null !== $this->policys && \is_array($this->policys)) {
                $n = 0;
                foreach ($this->policys as $item) {
                    $res['Policys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policys'])) {
            if (!empty($map['Policys'])) {
                $model->policys = [];
                $n              = 0;
                foreach ($map['Policys'] as $item) {
                    $model->policys[$n++] = null !== $item ? policys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
