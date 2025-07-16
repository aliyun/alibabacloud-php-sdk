<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListTicketOperateRecordShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eKWh3xxxxiE
     *
     * @var string
     */
    public $openTeamId;

    /**
     * @description This parameter is required.
     *
     * @example Dq9hP8Sk2v6vQxxxxiE
     *
     * @var string
     */
    public $openTicketId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'openTeamId' => 'OpenTeamId',
        'openTicketId' => 'OpenTicketId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }
        if (null !== $this->openTicketId) {
            $res['OpenTicketId'] = $this->openTicketId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTicketOperateRecordShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenTeamId'])) {
            $model->openTeamId = $map['OpenTeamId'];
        }
        if (isset($map['OpenTicketId'])) {
            $model->openTicketId = $map['OpenTicketId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
