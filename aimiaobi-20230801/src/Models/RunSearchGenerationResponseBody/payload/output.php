<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var agentContext
     */
    public $agentContext;
    protected $_name = [
        'agentContext' => 'AgentContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentContext) {
            $res['AgentContext'] = null !== $this->agentContext ? $this->agentContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentContext'])) {
            $model->agentContext = agentContext::fromMap($map['AgentContext']);
        }

        return $model;
    }
}
