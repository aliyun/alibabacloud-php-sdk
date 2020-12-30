<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos\vswitchInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchInfo) {
            $res['VswitchInfo'] = [];
            if (null !== $this->vswitchInfo && \is_array($this->vswitchInfo)) {
                $n = 0;
                foreach ($this->vswitchInfo as $item) {
                    $res['VswitchInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vswitchInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VswitchInfo'])) {
            if (!empty($map['VswitchInfo'])) {
                $model->vswitchInfo = [];
                $n                  = 0;
                foreach ($map['VswitchInfo'] as $item) {
                    $model->vswitchInfo[$n++] = null !== $item ? vswitchInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
