<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo\vipInfo;
use AlibabaCloud\Tea\Model;

class directVipInfo extends Model
{
    /**
     * @var vipInfo[]
     */
    public $vipInfo;
    protected $_name = [
        'vipInfo' => 'VipInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vipInfo) {
            $res['VipInfo'] = [];
            if (null !== $this->vipInfo && \is_array($this->vipInfo)) {
                $n = 0;
                foreach ($this->vipInfo as $item) {
                    $res['VipInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directVipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VipInfo'])) {
            if (!empty($map['VipInfo'])) {
                $model->vipInfo = [];
                $n              = 0;
                foreach ($map['VipInfo'] as $item) {
                    $model->vipInfo[$n++] = null !== $item ? vipInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
