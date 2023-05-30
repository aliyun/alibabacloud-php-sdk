<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponseBody\policys;
use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallControlPolicyResponseBody extends Model
{
    /**
     * @description The information about the access control policies.
     *
     * @var policys[]
     */
    public $policys;

    /**
     * @description The ID of the request.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of access control policies returned.
     *
     * @example 20
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
     * @return DescribeVpcFirewallControlPolicyResponseBody
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
