<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\Tea\Model;

class teeConfig extends Model
{
    /**
     * @description 是否为加密计算节点池。
     *
     * @var bool
     */
    public $teeEnable;
    protected $_name = [
        'teeEnable' => 'tee_enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->teeEnable) {
            $res['tee_enable'] = $this->teeEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return teeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tee_enable'])) {
            $model->teeEnable = $map['tee_enable'];
        }

        return $model;
    }
}
