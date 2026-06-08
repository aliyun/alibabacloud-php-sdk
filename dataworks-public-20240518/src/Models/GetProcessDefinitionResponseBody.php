<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessDefinitionResponseBody\processDefinition;

class GetProcessDefinitionResponseBody extends Model
{
    /**
     * @var processDefinition
     */
    public $processDefinition;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processDefinition' => 'ProcessDefinition',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->processDefinition) {
            $this->processDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processDefinition) {
            $res['ProcessDefinition'] = null !== $this->processDefinition ? $this->processDefinition->toArray($noStream) : $this->processDefinition;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProcessDefinition'])) {
            $model->processDefinition = processDefinition::fromMap($map['ProcessDefinition']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
