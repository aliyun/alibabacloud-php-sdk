<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponseBody\reusableSlbList;
use AlibabaCloud\Tea\Model;

class DescribeReusableSlbResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EDDC0D86-2FC3-56FB-9213-96EB0A3523F1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of SLB instances that can be reused.
     *
     * @var reusableSlbList[]
     */
    public $reusableSlbList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'reusableSlbList' => 'ReusableSlbList',
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
        if (null !== $this->reusableSlbList) {
            $res['ReusableSlbList'] = [];
            if (null !== $this->reusableSlbList && \is_array($this->reusableSlbList)) {
                $n = 0;
                foreach ($this->reusableSlbList as $item) {
                    $res['ReusableSlbList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReusableSlbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReusableSlbList'])) {
            if (!empty($map['ReusableSlbList'])) {
                $model->reusableSlbList = [];
                $n                      = 0;
                foreach ($map['ReusableSlbList'] as $item) {
                    $model->reusableSlbList[$n++] = null !== $item ? reusableSlbList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
