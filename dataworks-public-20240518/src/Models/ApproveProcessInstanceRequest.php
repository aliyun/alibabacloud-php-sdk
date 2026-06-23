<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ApproveProcessInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $approvalAction;

    /**
     * @var string
     */
    public $approvalComment;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $newExpiration;

    /**
     * @var string
     */
    public $processInstanceId;
    protected $_name = [
        'approvalAction' => 'ApprovalAction',
        'approvalComment' => 'ApprovalComment',
        'clientToken' => 'ClientToken',
        'newExpiration' => 'NewExpiration',
        'processInstanceId' => 'ProcessInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalAction) {
            $res['ApprovalAction'] = $this->approvalAction;
        }

        if (null !== $this->approvalComment) {
            $res['ApprovalComment'] = $this->approvalComment;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->newExpiration) {
            $res['NewExpiration'] = $this->newExpiration;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
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
        if (isset($map['ApprovalAction'])) {
            $model->approvalAction = $map['ApprovalAction'];
        }

        if (isset($map['ApprovalComment'])) {
            $model->approvalComment = $map['ApprovalComment'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['NewExpiration'])) {
            $model->newExpiration = $map['NewExpiration'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        return $model;
    }
}
