<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListResponseBody\vpcList;
use AlibabaCloud\Tea\Model;

class DescribeVpcListResponseBody extends Model
{
    /**
     * @description Queries the information about virtual private clouds (VPCs).
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description DescribeVpcList
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var vpcList[]
     */
    public $vpcList;
    protected $_name = [
        'count'     => 'Count',
        'requestId' => 'RequestId',
        'vpcList'   => 'VpcList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcList) {
            $res['VpcList'] = [];
            if (null !== $this->vpcList && \is_array($this->vpcList)) {
                $n = 0;
                foreach ($this->vpcList as $item) {
                    $res['VpcList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = [];
                $n              = 0;
                foreach ($map['VpcList'] as $item) {
                    $model->vpcList[$n++] = null !== $item ? vpcList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
