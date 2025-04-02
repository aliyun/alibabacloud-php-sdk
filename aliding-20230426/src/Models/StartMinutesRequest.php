<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesRequest\tenantContext;

class StartMinutesRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var bool
     */
    public $recordAudio;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
        'ownerUserId' => 'ownerUserId',
        'recordAudio' => 'recordAudio',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->ownerUserId) {
            $res['ownerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->recordAudio) {
            $res['recordAudio'] = $this->recordAudio;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['ownerUserId'])) {
            $model->ownerUserId = $map['ownerUserId'];
        }

        if (isset($map['recordAudio'])) {
            $model->recordAudio = $map['recordAudio'];
        }

        return $model;
    }
}
