<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Session extends Model
{
    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $sessionAffinityType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $sessionIdleTimeoutInSeconds;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var int
     */
    public $sessionTTLInSeconds;
    protected $_name = [
        'containerId' => 'containerId',
        'createdTime' => 'createdTime',
        'functionName' => 'functionName',
        'lastModifiedTime' => 'lastModifiedTime',
        'qualifier' => 'qualifier',
        'sessionAffinityType' => 'sessionAffinityType',
        'sessionId' => 'sessionId',
        'sessionIdleTimeoutInSeconds' => 'sessionIdleTimeoutInSeconds',
        'sessionStatus' => 'sessionStatus',
        'sessionTTLInSeconds' => 'sessionTTLInSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['containerId'] = $this->containerId;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->sessionAffinityType) {
            $res['sessionAffinityType'] = $this->sessionAffinityType;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionIdleTimeoutInSeconds) {
            $res['sessionIdleTimeoutInSeconds'] = $this->sessionIdleTimeoutInSeconds;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionTTLInSeconds) {
            $res['sessionTTLInSeconds'] = $this->sessionTTLInSeconds;
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
        if (isset($map['containerId'])) {
            $model->containerId = $map['containerId'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['sessionAffinityType'])) {
            $model->sessionAffinityType = $map['sessionAffinityType'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionIdleTimeoutInSeconds'])) {
            $model->sessionIdleTimeoutInSeconds = $map['sessionIdleTimeoutInSeconds'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        if (isset($map['sessionTTLInSeconds'])) {
            $model->sessionTTLInSeconds = $map['sessionTTLInSeconds'];
        }

        return $model;
    }
}
