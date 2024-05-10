<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetNodeShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a9E05BDRVQ9K600yf1NplNDxV63zgkYA
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $withPermissionRole;

    /**
     * @example true
     *
     * @var bool
     */
    public $withStatisticalInfo;
    protected $_name = [
        'nodeId'              => 'NodeId',
        'tenantContextShrink' => 'TenantContext',
        'withPermissionRole'  => 'WithPermissionRole',
        'withStatisticalInfo' => 'WithStatisticalInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
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
     * @return GetNodeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['WithPermissionRole'])) {
            $model->withPermissionRole = $map['WithPermissionRole'];
        }
        if (isset($map['WithStatisticalInfo'])) {
            $model->withStatisticalInfo = $map['WithStatisticalInfo'];
        }

        return $model;
    }
}
