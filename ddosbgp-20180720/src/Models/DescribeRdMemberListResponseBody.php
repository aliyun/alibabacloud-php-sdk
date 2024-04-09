<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRdMemberListResponseBody\memberList;
use AlibabaCloud\Tea\Model;

class DescribeRdMemberListResponseBody extends Model
{
    /**
     * @var memberList[]
     */
    public $memberList;

    /**
     * @example DC245DEE-9800-5579-BF99-189D6A5BA9FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'memberList' => 'MemberList',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberList) {
            $res['MemberList'] = [];
            if (null !== $this->memberList && \is_array($this->memberList)) {
                $n = 0;
                foreach ($this->memberList as $item) {
                    $res['MemberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdMemberListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n                 = 0;
                foreach ($map['MemberList'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
