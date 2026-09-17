<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ReplyAgentSessionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ReplyAgentSessionRequest\params\outcome;

class params extends Model
{
    /**
     * @var string[]
     */
    public $answers;

    /**
     * @var outcome
     */
    public $outcome;

    /**
     * @var string
     */
    public $permissionRequestId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'answers' => 'Answers',
        'outcome' => 'Outcome',
        'permissionRequestId' => 'PermissionRequestId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->answers)) {
            Model::validateArray($this->answers);
        }
        if (null !== $this->outcome) {
            $this->outcome->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answers) {
            if (\is_array($this->answers)) {
                $res['Answers'] = [];
                foreach ($this->answers as $key1 => $value1) {
                    $res['Answers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->outcome) {
            $res['Outcome'] = null !== $this->outcome ? $this->outcome->toArray($noStream) : $this->outcome;
        }

        if (null !== $this->permissionRequestId) {
            $res['PermissionRequestId'] = $this->permissionRequestId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Answers'])) {
            if (!empty($map['Answers'])) {
                $model->answers = [];
                foreach ($map['Answers'] as $key1 => $value1) {
                    $model->answers[$key1] = $value1;
                }
            }
        }

        if (isset($map['Outcome'])) {
            $model->outcome = outcome::fromMap($map['Outcome']);
        }

        if (isset($map['PermissionRequestId'])) {
            $model->permissionRequestId = $map['PermissionRequestId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
