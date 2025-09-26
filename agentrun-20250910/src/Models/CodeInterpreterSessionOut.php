<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CodeInterpreterSessionOut extends Model
{
    /**
     * @var string
     */
    public $codeInterpreterId;

    /**
     * @var string
     */
    public $codeInterpreterName;

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
        'codeInterpreterId' => 'codeInterpreterId',
        'codeInterpreterName' => 'codeInterpreterName',
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
        if (null !== $this->codeInterpreterId) {
            $res['codeInterpreterId'] = $this->codeInterpreterId;
        }

        if (null !== $this->codeInterpreterName) {
            $res['codeInterpreterName'] = $this->codeInterpreterName;
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
        if (isset($map['codeInterpreterId'])) {
            $model->codeInterpreterId = $map['codeInterpreterId'];
        }

        if (isset($map['codeInterpreterName'])) {
            $model->codeInterpreterName = $map['codeInterpreterName'];
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
