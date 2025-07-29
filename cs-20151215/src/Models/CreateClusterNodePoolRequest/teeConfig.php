<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class teeConfig extends Model
{
    /**
     * @description Specifies whether to enable confidential computing for the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $teeEnable;
    protected $_name = [
        'teeEnable' => 'tee_enable',
    ];

    public function validate() {}

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
