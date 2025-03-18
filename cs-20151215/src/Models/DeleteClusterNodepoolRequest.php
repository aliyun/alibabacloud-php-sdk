<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodepoolRequest extends Model
{
    /**
     * @description Specifies whether to forcefully delete the node pool.
     *
     * @example false
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'force' => 'force',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterNodepoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
