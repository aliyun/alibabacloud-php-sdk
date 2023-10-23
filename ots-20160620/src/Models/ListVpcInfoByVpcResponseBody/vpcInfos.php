<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcResponseBody;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcResponseBody\vpcInfos\vpcInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcInfo) {
            $res['VpcInfo'] = [];
            if (null !== $this->vpcInfo && \is_array($this->vpcInfo)) {
                $n = 0;
                foreach ($this->vpcInfo as $item) {
                    $res['VpcInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcInfo'])) {
            if (!empty($map['VpcInfo'])) {
                $model->vpcInfo = [];
                $n              = 0;
                foreach ($map['VpcInfo'] as $item) {
                    $model->vpcInfo[$n++] = null !== $item ? vpcInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
