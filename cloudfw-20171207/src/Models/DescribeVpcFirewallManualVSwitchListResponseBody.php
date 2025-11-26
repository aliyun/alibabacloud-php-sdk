<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallManualVSwitchListResponseBody\vSwitchList;

class DescribeVpcFirewallManualVSwitchListResponseBody extends Model
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
     * @var vSwitchList[]
     */
    public $vSwitchList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vSwitchList' => 'VSwitchList',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchList)) {
            Model::validateArray($this->vSwitchList);
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

        if (null !== $this->vSwitchList) {
            if (\is_array($this->vSwitchList)) {
                $res['VSwitchList'] = [];
                $n1 = 0;
                foreach ($this->vSwitchList as $item1) {
                    $res['VSwitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VSwitchList'])) {
            if (!empty($map['VSwitchList'])) {
                $model->vSwitchList = [];
                $n1 = 0;
                foreach ($map['VSwitchList'] as $item1) {
                    $model->vSwitchList[$n1] = vSwitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
