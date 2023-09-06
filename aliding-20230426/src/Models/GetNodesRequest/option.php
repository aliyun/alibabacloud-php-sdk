<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest;

use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $withPermissionRole;

    /**
     * @example false
     *
     * @var bool
     */
    public $withStatisticalInfo;
    protected $_name = [
        'withPermissionRole'  => 'WithPermissionRole',
        'withStatisticalInfo' => 'WithStatisticalInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withPermissionRole) {
            $res['WithPermissionRole'] = $this->withPermissionRole;
        }
        if (null !== $this->withStatisticalInfo) {
            $res['WithStatisticalInfo'] = $this->withStatisticalInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WithPermissionRole'])) {
            $model->withPermissionRole = $map['WithPermissionRole'];
        }
        if (isset($map['WithStatisticalInfo'])) {
            $model->withStatisticalInfo = $map['WithStatisticalInfo'];
        }

        return $model;
    }
}
