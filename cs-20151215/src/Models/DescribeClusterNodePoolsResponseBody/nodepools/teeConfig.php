<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class teeConfig extends Model
{
    /**
     * @description Indicates whether confidential computing is enabled. Valid values:
     *
     *   `true`: Confidential computing is enabled.
     *   `false`: Confidential computing is disabled.
     *
     * @example false
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
