<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class StartMinutesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 61289fxxx
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description This parameter is required.
     *
     * @example 012345
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example false
     *
     * @var bool
     */
    public $recordAudio;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'conferenceId'        => 'conferenceId',
        'ownerUserId'         => 'ownerUserId',
        'recordAudio'         => 'recordAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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

    /**
     * @param array $map
     *
     * @return StartMinutesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
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
