<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MuteAllRequest\tenantContext;

class MuteAllRequest extends Model
{
    /**
     * @var bool
     */
    public $forceMute;

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
    public $muteAction;
    protected $_name = [
        'forceMute' => 'ForceMute',
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
        'muteAction' => 'muteAction',
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
        if (null !== $this->forceMute) {
            $res['ForceMute'] = $this->forceMute;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->muteAction) {
            $res['muteAction'] = $this->muteAction;
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
        if (isset($map['ForceMute'])) {
            $model->forceMute = $map['ForceMute'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['muteAction'])) {
            $model->muteAction = $map['muteAction'];
        }

        return $model;
    }
}
