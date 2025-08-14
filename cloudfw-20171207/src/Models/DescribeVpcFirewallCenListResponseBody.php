<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls;

class DescribeVpcFirewallCenListResponseBody extends Model
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
     * @var vpcFirewalls[]
     */
    public $vpcFirewalls;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcFirewalls' => 'VpcFirewalls',
    ];

    public function validate()
    {
        if (\is_array($this->vpcFirewalls)) {
            Model::validateArray($this->vpcFirewalls);
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

        if (null !== $this->vpcFirewalls) {
            if (\is_array($this->vpcFirewalls)) {
                $res['VpcFirewalls'] = [];
                $n1 = 0;
                foreach ($this->vpcFirewalls as $item1) {
                    $res['VpcFirewalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VpcFirewalls'])) {
            if (!empty($map['VpcFirewalls'])) {
                $model->vpcFirewalls = [];
                $n1 = 0;
                foreach ($map['VpcFirewalls'] as $item1) {
                    $model->vpcFirewalls[$n1] = vpcFirewalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
