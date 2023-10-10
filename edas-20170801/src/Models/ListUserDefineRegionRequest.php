<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListUserDefineRegionRequest extends Model
{
    /**
     * @description Specifies whether remote debugging is allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $debugEnable;
    protected $_name = [
        'debugEnable' => 'DebugEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserDefineRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }

        return $model;
    }
}
