<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BrowserSessionOut extends Model
{
    /**
     * @var string
     */
    public $browserId;

    /**
     * @var string
     */
    public $browserName;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $sessionIdleTimeoutSeconds;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'browserId' => 'browserId',
        'browserName' => 'browserName',
        'createdAt' => 'createdAt',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'sessionId' => 'sessionId',
        'sessionIdleTimeoutSeconds' => 'sessionIdleTimeoutSeconds',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserId) {
            $res['browserId'] = $this->browserId;
        }

        if (null !== $this->browserName) {
            $res['browserName'] = $this->browserName;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionIdleTimeoutSeconds) {
            $res['sessionIdleTimeoutSeconds'] = $this->sessionIdleTimeoutSeconds;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['browserId'])) {
            $model->browserId = $map['browserId'];
        }

        if (isset($map['browserName'])) {
            $model->browserName = $map['browserName'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionIdleTimeoutSeconds'])) {
            $model->sessionIdleTimeoutSeconds = $map['sessionIdleTimeoutSeconds'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
