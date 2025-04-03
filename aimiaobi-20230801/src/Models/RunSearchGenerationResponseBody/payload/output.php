<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext;

class output extends Model
{
    /**
     * @var agentContext
     */
    public $agentContext;
    protected $_name = [
        'agentContext' => 'AgentContext',
    ];

    public function validate()
    {
        if (null !== $this->agentContext) {
            $this->agentContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentContext) {
            $res['AgentContext'] = null !== $this->agentContext ? $this->agentContext->toArray($noStream) : $this->agentContext;
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
        if (isset($map['AgentContext'])) {
            $model->agentContext = agentContext::fromMap($map['AgentContext']);
        }

        return $model;
    }
}
