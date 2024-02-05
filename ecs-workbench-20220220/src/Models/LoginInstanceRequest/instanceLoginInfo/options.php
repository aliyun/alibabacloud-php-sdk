<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\options\containerInfo;
use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @var int
     */
    public $audioMuteSeconds;

    /**
     * @var containerInfo
     */
    public $containerInfo;

    /**
     * @var int
     */
    public $fixedHeight;

    /**
     * @var int
     */
    public $fixedWidth;

    /**
     * @example abc
     *
     * @var string
     */
    public $notificationEventTypes;

    /**
     * @example abc
     *
     * @var string
     */
    public $notificationRecipientUrl;

    /**
     * @example 10
     *
     * @var int
     */
    public $notificationRetryIntervalSeconds;

    /**
     * @example 3
     *
     * @var int
     */
    public $notificationRetryLimit;

    /**
     * @var int
     */
    public $operationDisableSeconds;

    /**
     * @example abc
     *
     * @var string
     */
    public $sessionControl;

    /**
     * @var int
     */
    public $videoFreezeSeconds;
    protected $_name = [
        'audioMuteSeconds'                 => 'AudioMuteSeconds',
        'containerInfo'                    => 'ContainerInfo',
        'fixedHeight'                      => 'FixedHeight',
        'fixedWidth'                       => 'FixedWidth',
        'notificationEventTypes'           => 'NotificationEventTypes',
        'notificationRecipientUrl'         => 'NotificationRecipientUrl',
        'notificationRetryIntervalSeconds' => 'NotificationRetryIntervalSeconds',
        'notificationRetryLimit'           => 'NotificationRetryLimit',
        'operationDisableSeconds'          => 'OperationDisableSeconds',
        'sessionControl'                   => 'SessionControl',
        'videoFreezeSeconds'               => 'VideoFreezeSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioMuteSeconds) {
            $res['AudioMuteSeconds'] = $this->audioMuteSeconds;
        }
        if (null !== $this->containerInfo) {
            $res['ContainerInfo'] = null !== $this->containerInfo ? $this->containerInfo->toMap() : null;
        }
        if (null !== $this->fixedHeight) {
            $res['FixedHeight'] = $this->fixedHeight;
        }
        if (null !== $this->fixedWidth) {
            $res['FixedWidth'] = $this->fixedWidth;
        }
        if (null !== $this->notificationEventTypes) {
            $res['NotificationEventTypes'] = $this->notificationEventTypes;
        }
        if (null !== $this->notificationRecipientUrl) {
            $res['NotificationRecipientUrl'] = $this->notificationRecipientUrl;
        }
        if (null !== $this->notificationRetryIntervalSeconds) {
            $res['NotificationRetryIntervalSeconds'] = $this->notificationRetryIntervalSeconds;
        }
        if (null !== $this->notificationRetryLimit) {
            $res['NotificationRetryLimit'] = $this->notificationRetryLimit;
        }
        if (null !== $this->operationDisableSeconds) {
            $res['OperationDisableSeconds'] = $this->operationDisableSeconds;
        }
        if (null !== $this->sessionControl) {
            $res['SessionControl'] = $this->sessionControl;
        }
        if (null !== $this->videoFreezeSeconds) {
            $res['VideoFreezeSeconds'] = $this->videoFreezeSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioMuteSeconds'])) {
            $model->audioMuteSeconds = $map['AudioMuteSeconds'];
        }
        if (isset($map['ContainerInfo'])) {
            $model->containerInfo = containerInfo::fromMap($map['ContainerInfo']);
        }
        if (isset($map['FixedHeight'])) {
            $model->fixedHeight = $map['FixedHeight'];
        }
        if (isset($map['FixedWidth'])) {
            $model->fixedWidth = $map['FixedWidth'];
        }
        if (isset($map['NotificationEventTypes'])) {
            $model->notificationEventTypes = $map['NotificationEventTypes'];
        }
        if (isset($map['NotificationRecipientUrl'])) {
            $model->notificationRecipientUrl = $map['NotificationRecipientUrl'];
        }
        if (isset($map['NotificationRetryIntervalSeconds'])) {
            $model->notificationRetryIntervalSeconds = $map['NotificationRetryIntervalSeconds'];
        }
        if (isset($map['NotificationRetryLimit'])) {
            $model->notificationRetryLimit = $map['NotificationRetryLimit'];
        }
        if (isset($map['OperationDisableSeconds'])) {
            $model->operationDisableSeconds = $map['OperationDisableSeconds'];
        }
        if (isset($map['SessionControl'])) {
            $model->sessionControl = $map['SessionControl'];
        }
        if (isset($map['VideoFreezeSeconds'])) {
            $model->videoFreezeSeconds = $map['VideoFreezeSeconds'];
        }

        return $model;
    }
}
