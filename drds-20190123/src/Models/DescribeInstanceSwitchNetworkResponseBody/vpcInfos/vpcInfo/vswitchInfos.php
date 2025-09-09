<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos\vswitchInfo;

class vswitchInfos extends Model
{
    /**
     * @var vswitchInfo[]
     */
    public $vswitchInfo;
    protected $_name = [
        'vswitchInfo' => 'VswitchInfo',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchInfo)) {
            Model::validateArray($this->vswitchInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vswitchInfo) {
            if (\is_array($this->vswitchInfo)) {
                $res['VswitchInfo'] = [];
                $n1 = 0;
                foreach ($this->vswitchInfo as $item1) {
                    $res['VswitchInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VswitchInfo'])) {
            if (!empty($map['VswitchInfo'])) {
                $model->vswitchInfo = [];
                $n1 = 0;
                foreach ($map['VswitchInfo'] as $item1) {
                    $model->vswitchInfo[$n1] = vswitchInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
