<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodeConfig;

use AlibabaCloud\Tea\Model;

class rolloutPolicy extends Model
{
    /**
     * @var int
     */
    public $maxUnavailable;
    protected $_name = [
        'maxUnavailable' => 'max_unavailable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxUnavailable) {
            $res['max_unavailable'] = $this->maxUnavailable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolloutPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['max_unavailable'])) {
            $model->maxUnavailable = $map['max_unavailable'];
        }

        return $model;
    }
}
