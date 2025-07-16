<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AssignTicketShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $notifyShrink;

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
    public $processorUserIdsShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $ticketMemoShrink;
    protected $_name = [
        'notifyShrink' => 'Notify',
        'openTeamId' => 'OpenTeamId',
        'openTicketId' => 'OpenTicketId',
        'processorUserIdsShrink' => 'ProcessorUserIds',
        'tenantContextShrink' => 'TenantContext',
        'ticketMemoShrink' => 'TicketMemo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyShrink) {
            $res['Notify'] = $this->notifyShrink;
        }
        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }
        if (null !== $this->openTicketId) {
            $res['OpenTicketId'] = $this->openTicketId;
        }
        if (null !== $this->processorUserIdsShrink) {
            $res['ProcessorUserIds'] = $this->processorUserIdsShrink;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->ticketMemoShrink) {
            $res['TicketMemo'] = $this->ticketMemoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignTicketShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Notify'])) {
            $model->notifyShrink = $map['Notify'];
        }
        if (isset($map['OpenTeamId'])) {
            $model->openTeamId = $map['OpenTeamId'];
        }
        if (isset($map['OpenTicketId'])) {
            $model->openTicketId = $map['OpenTicketId'];
        }
        if (isset($map['ProcessorUserIds'])) {
            $model->processorUserIdsShrink = $map['ProcessorUserIds'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['TicketMemo'])) {
            $model->ticketMemoShrink = $map['TicketMemo'];
        }

        return $model;
    }
}
