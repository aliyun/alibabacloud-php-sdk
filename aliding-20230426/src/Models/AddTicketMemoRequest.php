<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoRequest\tenantContext;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoRequest\ticketMemo;
use AlibabaCloud\Tea\Model;

class AddTicketMemoRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var ticketMemo
     */
    public $ticketMemo;
    protected $_name = [
        'openTeamId' => 'OpenTeamId',
        'openTicketId' => 'OpenTicketId',
        'tenantContext' => 'TenantContext',
        'ticketMemo' => 'TicketMemo',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->ticketMemo) {
            $res['TicketMemo'] = null !== $this->ticketMemo ? $this->ticketMemo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTicketMemoRequest
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['TicketMemo'])) {
            $model->ticketMemo = ticketMemo::fromMap($map['TicketMemo']);
        }

        return $model;
    }
}
