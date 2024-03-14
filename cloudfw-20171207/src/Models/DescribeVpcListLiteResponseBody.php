<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcListLiteResponseBody\vpcList;
use AlibabaCloud\Tea\Model;

class DescribeVpcListLiteResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 55E56A55-D93A-5614-AE00-BE2F8077F891
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the VPCs.
     *
     * @var vpcList[]
     */
    public $vpcList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpcList'   => 'VpcList',
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
     * @return DescribeVpcListLiteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
