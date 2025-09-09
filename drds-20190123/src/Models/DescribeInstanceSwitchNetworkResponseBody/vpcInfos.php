<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo;

class vpcInfos extends Model
{
    /**
     * @var vpcInfo[]
     */
    public $vpcInfo;
    protected $_name = [
        'vpcInfo' => 'VpcInfo',
    ];

    public function validate()
    {
        if (\is_array($this->vpcInfo)) {
            Model::validateArray($this->vpcInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcInfo) {
            if (\is_array($this->vpcInfo)) {
                $res['VpcInfo'] = [];
                $n1 = 0;
                foreach ($this->vpcInfo as $item1) {
                    $res['VpcInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpcInfo'])) {
            if (!empty($map['VpcInfo'])) {
                $model->vpcInfo = [];
                $n1 = 0;
                foreach ($map['VpcInfo'] as $item1) {
                    $model->vpcInfo[$n1] = vpcInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
