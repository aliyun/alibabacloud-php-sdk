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
