<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetTicketShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $openTeamId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
