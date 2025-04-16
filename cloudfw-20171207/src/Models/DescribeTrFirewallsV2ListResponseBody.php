<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;

class DescribeTrFirewallsV2ListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var vpcTrFirewalls[]
     */
    public $vpcTrFirewalls;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcTrFirewalls' => 'VpcTrFirewalls',
    ];

    public function validate()
    {
        if (\is_array($this->vpcTrFirewalls)) {
            Model::validateArray($this->vpcTrFirewalls);
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

        if (null !== $this->vpcTrFirewalls) {
            if (\is_array($this->vpcTrFirewalls)) {
                $res['VpcTrFirewalls'] = [];
                $n1 = 0;
                foreach ($this->vpcTrFirewalls as $item1) {
                    $res['VpcTrFirewalls'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VpcTrFirewalls'])) {
            if (!empty($map['VpcTrFirewalls'])) {
                $model->vpcTrFirewalls = [];
                $n1 = 0;
                foreach ($map['VpcTrFirewalls'] as $item1) {
                    $model->vpcTrFirewalls[$n1++] = vpcTrFirewalls::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
