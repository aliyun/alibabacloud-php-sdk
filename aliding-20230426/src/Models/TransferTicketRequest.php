<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketRequest\notify;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketRequest\tenantContext;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketRequest\ticketMemo;

class TransferTicketRequest extends Model
{
    /**
     * @var notify
     */
    public $notify;
    /**
     * @var string
     */
    public $openTeamId;
    /**
     * @var string
     */
    public $openTicketId;
    /**
     * @var string[]
     */
    public $processorUserIds;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var ticketMemo
     */
    public $ticketMemo;
    protected $_name = [
        'notify'           => 'Notify',
        'openTeamId'       => 'OpenTeamId',
        'openTicketId'     => 'OpenTicketId',
        'processorUserIds' => 'ProcessorUserIds',
        'tenantContext'    => 'TenantContext',
        'ticketMemo'       => 'TicketMemo',
    ];

    public function validate()
    {
        if (null !== $this->notify) {
            $this->notify->validate();
        }
        if (\is_array($this->processorUserIds)) {
            Model::validateArray($this->processorUserIds);
        }
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
        if (null !== $this->notify) {
            $res['Notify'] = null !== $this->notify ? $this->notify->toArray($noStream) : $this->notify;
        }

        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }

        if (null !== $this->openTicketId) {
            $res['OpenTicketId'] = $this->openTicketId;
        }

        if (null !== $this->processorUserIds) {
            if (\is_array($this->processorUserIds)) {
                $res['ProcessorUserIds'] = [];
                $n1                      = 0;
                foreach ($this->processorUserIds as $item1) {
                    $res['ProcessorUserIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Notify'])) {
            $model->notify = notify::fromMap($map['Notify']);
        }

        if (isset($map['OpenTeamId'])) {
            $model->openTeamId = $map['OpenTeamId'];
        }

        if (isset($map['OpenTicketId'])) {
            $model->openTicketId = $map['OpenTicketId'];
        }

        if (isset($map['ProcessorUserIds'])) {
            if (!empty($map['ProcessorUserIds'])) {
                $model->processorUserIds = [];
                $n1                      = 0;
                foreach ($map['ProcessorUserIds'] as $item1) {
                    $model->processorUserIds[$n1++] = $item1;
                }
            }
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
