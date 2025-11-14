<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ForwardAIAgentCallRequest extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $errorPrompt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $transferPrompt;
    protected $_name = [
        'calledNumber' => 'CalledNumber',
        'errorPrompt' => 'ErrorPrompt',
        'instanceId' => 'InstanceId',
        'transferPrompt' => 'TransferPrompt',
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

        if (null !== $this->errorPrompt) {
            $res['ErrorPrompt'] = $this->errorPrompt;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->transferPrompt) {
            $res['TransferPrompt'] = $this->transferPrompt;
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

        if (isset($map['ErrorPrompt'])) {
            $model->errorPrompt = $map['ErrorPrompt'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TransferPrompt'])) {
            $model->transferPrompt = $map['TransferPrompt'];
        }

        return $model;
    }
}
