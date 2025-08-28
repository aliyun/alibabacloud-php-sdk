<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo\vipInfo;

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
        if (\is_array($this->vipInfo)) {
            Model::validateArray($this->vipInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vipInfo) {
            if (\is_array($this->vipInfo)) {
                $res['VipInfo'] = [];
                $n1 = 0;
                foreach ($this->vipInfo as $item1) {
                    $res['VipInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VipInfo'])) {
            if (!empty($map['VipInfo'])) {
                $model->vipInfo = [];
                $n1 = 0;
                foreach ($map['VipInfo'] as $item1) {
                    $model->vipInfo[$n1] = vipInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
