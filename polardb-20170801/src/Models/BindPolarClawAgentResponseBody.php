<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\BindPolarClawAgentResponseBody\binding;

class BindPolarClawAgentResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var binding
     */
    public $binding;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalBindings;
    protected $_name = [
        'agentId' => 'AgentId',
        'applicationId' => 'ApplicationId',
        'binding' => 'Binding',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'totalBindings' => 'TotalBindings',
    ];

    public function validate()
    {
        if (null !== $this->binding) {
            $this->binding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->binding) {
            $res['Binding'] = null !== $this->binding ? $this->binding->toArray($noStream) : $this->binding;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalBindings) {
            $res['TotalBindings'] = $this->totalBindings;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Binding'])) {
            $model->binding = binding::fromMap($map['Binding']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalBindings'])) {
            $model->totalBindings = $map['TotalBindings'];
        }

        return $model;
    }
}
