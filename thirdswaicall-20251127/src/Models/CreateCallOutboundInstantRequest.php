<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models;

use AlibabaCloud\Dara\Model;

class CreateCallOutboundInstantRequest extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $callerUacAccountId;

    /**
     * @var string
     */
    public $currentWorkspaceId;

    /**
     * @var string
     */
    public $customerLineCode;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var bool
     */
    public $encryptCall;

    /**
     * @var string
     */
    public $promptVariables;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'callerUacAccountId' => 'CallerUacAccountId',
        'currentWorkspaceId' => 'CurrentWorkspaceId',
        'customerLineCode' => 'CustomerLineCode',
        'customerName' => 'CustomerName',
        'encryptCall' => 'EncryptCall',
        'promptVariables' => 'PromptVariables',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->callerUacAccountId) {
            $res['CallerUacAccountId'] = $this->callerUacAccountId;
        }

        if (null !== $this->currentWorkspaceId) {
            $res['CurrentWorkspaceId'] = $this->currentWorkspaceId;
        }

        if (null !== $this->customerLineCode) {
            $res['CustomerLineCode'] = $this->customerLineCode;
        }

        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }

        if (null !== $this->encryptCall) {
            $res['EncryptCall'] = $this->encryptCall;
        }

        if (null !== $this->promptVariables) {
            $res['PromptVariables'] = $this->promptVariables;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['CallerUacAccountId'])) {
            $model->callerUacAccountId = $map['CallerUacAccountId'];
        }

        if (isset($map['CurrentWorkspaceId'])) {
            $model->currentWorkspaceId = $map['CurrentWorkspaceId'];
        }

        if (isset($map['CustomerLineCode'])) {
            $model->customerLineCode = $map['CustomerLineCode'];
        }

        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }

        if (isset($map['EncryptCall'])) {
            $model->encryptCall = $map['EncryptCall'];
        }

        if (isset($map['PromptVariables'])) {
            $model->promptVariables = $map['PromptVariables'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
