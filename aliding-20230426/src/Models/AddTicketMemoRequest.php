<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoRequest\tenantContext;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoRequest\ticketMemo;

class AddTicketMemoRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var ticketMemo
     */
    public $ticketMemo;
    protected $_name = [
        'openTeamId'    => 'OpenTeamId',
        'openTicketId'  => 'OpenTicketId',
        'tenantContext' => 'TenantContext',
        'ticketMemo'    => 'TicketMemo',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (null !== $this->ticketMemo) {
            $this->ticketMemo->validate();
        }
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

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->ticketMemo) {
            $res['TicketMemo'] = null !== $this->ticketMemo ? $this->ticketMemo->toArray($noStream) : $this->ticketMemo;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['TicketMemo'])) {
            $model->ticketMemo = ticketMemo::fromMap($map['TicketMemo']);
        }

        return $model;
    }
}
