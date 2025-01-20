<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext;

class agentContext extends Model
{
    /**
     * @var bizContext
     */
    public $bizContext;
    protected $_name = [
        'bizContext' => 'BizContext',
    ];

    public function validate()
    {
        if (null !== $this->bizContext) {
            $this->bizContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizContext) {
            $res['BizContext'] = null !== $this->bizContext ? $this->bizContext->toArray($noStream) : $this->bizContext;
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
        if (isset($map['BizContext'])) {
            $model->bizContext = bizContext::fromMap($map['BizContext']);
        }

        return $model;
    }
}
