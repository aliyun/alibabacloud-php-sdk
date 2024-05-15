<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody\natFirewallList;
use AlibabaCloud\Tea\Model;

class DescribeNatFirewallListResponseBody extends Model
{
    /**
     * @var natFirewallList[]
     */
    public $natFirewallList;

    /**
     * @example 15FCCC52-1E23-57AE-B5EF-3E00A3******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'natFirewallList' => 'NatFirewallList',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natFirewallList) {
            $res['NatFirewallList'] = [];
            if (null !== $this->natFirewallList && \is_array($this->natFirewallList)) {
                $n = 0;
                foreach ($this->natFirewallList as $item) {
                    $res['NatFirewallList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeNatFirewallListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatFirewallList'])) {
            if (!empty($map['NatFirewallList'])) {
                $model->natFirewallList = [];
                $n                      = 0;
                foreach ($map['NatFirewallList'] as $item) {
                    $model->natFirewallList[$n++] = null !== $item ? natFirewallList::fromMap($item) : $item;
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
