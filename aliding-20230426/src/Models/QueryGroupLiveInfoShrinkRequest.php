<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryGroupLiveInfoShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'anchorUnionId'       => 'AnchorUnionId',
        'liveUuid'            => 'LiveUuid',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
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

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
