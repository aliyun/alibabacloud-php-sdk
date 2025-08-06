<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoRequest\tenantContext;

class QueryGroupLiveInfoRequest extends Model
{
    /**
     * @var string
     */
    public $anchorUnionId;

    /**
     * @var string
     */
    public $liveUuid;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'anchorUnionId' => 'AnchorUnionId',
        'liveUuid' => 'LiveUuid',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->anchorUnionId) {
            $res['AnchorUnionId'] = $this->anchorUnionId;
        }

        if (null !== $this->liveUuid) {
            $res['LiveUuid'] = $this->liveUuid;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['AnchorUnionId'])) {
            $model->anchorUnionId = $map['AnchorUnionId'];
        }

        if (isset($map['LiveUuid'])) {
            $model->liveUuid = $map['LiveUuid'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
