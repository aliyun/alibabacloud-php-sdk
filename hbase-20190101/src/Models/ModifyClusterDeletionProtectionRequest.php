<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterDeletionProtectionRequest extends Model
{
    /**
     * @example ld-****************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $protection;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'protection' => 'Protection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->protection) {
            $res['Protection'] = $this->protection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterDeletionProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Protection'])) {
            $model->protection = $map['Protection'];
        }

        return $model;
    }
}
