<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeRequest\tenantContext;

class GetNodeRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var bool
     */
    public $withPermissionRole;

    /**
     * @var bool
     */
    public $withStatisticalInfo;
    protected $_name = [
        'nodeId' => 'NodeId',
        'tenantContext' => 'TenantContext',
        'withPermissionRole' => 'WithPermissionRole',
        'withStatisticalInfo' => 'WithStatisticalInfo',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
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
