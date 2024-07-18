<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateVideoConferenceSettingRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowUnmuteSelf;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoTransferHost;

    /**
     * @example true
     *
     * @var bool
     */
    public $forbiddenShareScreen;

    /**
     * @example true
     *
     * @var bool
     */
    public $lockConference;

    /**
     * @example true
     *
     * @var bool
     */
    public $muteAll;

    /**
     * @example true
     *
     * @var bool
     */
    public $onlyInternalEmployeesJoin;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 61289fxxx
     *
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'allowUnmuteSelf'           => 'AllowUnmuteSelf',
        'autoTransferHost'          => 'AutoTransferHost',
        'forbiddenShareScreen'      => 'ForbiddenShareScreen',
        'lockConference'            => 'LockConference',
        'muteAll'                   => 'MuteAll',
        'onlyInternalEmployeesJoin' => 'OnlyInternalEmployeesJoin',
        'tenantContext'             => 'TenantContext',
        'conferenceId'              => 'conferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUnmuteSelf) {
            $res['AllowUnmuteSelf'] = $this->allowUnmuteSelf;
        }
        if (null !== $this->autoTransferHost) {
            $res['AutoTransferHost'] = $this->autoTransferHost;
        }
        if (null !== $this->forbiddenShareScreen) {
            $res['ForbiddenShareScreen'] = $this->forbiddenShareScreen;
        }
        if (null !== $this->lockConference) {
            $res['LockConference'] = $this->lockConference;
        }
        if (null !== $this->muteAll) {
            $res['MuteAll'] = $this->muteAll;
        }
        if (null !== $this->onlyInternalEmployeesJoin) {
            $res['OnlyInternalEmployeesJoin'] = $this->onlyInternalEmployeesJoin;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVideoConferenceSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUnmuteSelf'])) {
            $model->allowUnmuteSelf = $map['AllowUnmuteSelf'];
        }
        if (isset($map['AutoTransferHost'])) {
            $model->autoTransferHost = $map['AutoTransferHost'];
        }
        if (isset($map['ForbiddenShareScreen'])) {
            $model->forbiddenShareScreen = $map['ForbiddenShareScreen'];
        }
        if (isset($map['LockConference'])) {
            $model->lockConference = $map['LockConference'];
        }
        if (isset($map['MuteAll'])) {
            $model->muteAll = $map['MuteAll'];
        }
        if (isset($map['OnlyInternalEmployeesJoin'])) {
            $model->onlyInternalEmployeesJoin = $map['OnlyInternalEmployeesJoin'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}
