<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var bool
     */
    public $withPermissionRole;
    /**
     * @var bool
     */
    public $withStatisticalInfo;
    protected $_name = [
        'withPermissionRole'  => 'WithPermissionRole',
        'withStatisticalInfo' => 'WithStatisticalInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
