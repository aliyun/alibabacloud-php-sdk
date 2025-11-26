<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVswitchResourcesResponseBody\vswitchList;

class DescribeFirewallVswitchResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vswitchList[]
     */
    public $vswitchList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vswitchList' => 'VswitchList',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchList)) {
            Model::validateArray($this->vswitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vswitchList) {
            if (\is_array($this->vswitchList)) {
                $res['VswitchList'] = [];
                $n1 = 0;
                foreach ($this->vswitchList as $item1) {
                    $res['VswitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VswitchList'])) {
            if (!empty($map['VswitchList'])) {
                $model->vswitchList = [];
                $n1 = 0;
                foreach ($map['VswitchList'] as $item1) {
                    $model->vswitchList[$n1] = vswitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
