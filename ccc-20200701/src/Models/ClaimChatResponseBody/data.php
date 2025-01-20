<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data\chatContexts;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data\userContext;

class data extends Model
{
    /**
     * @var chatContexts[]
     */
    public $chatContexts;
    /**
     * @var int
     */
    public $contextId;
    /**
     * @var userContext
     */
    public $userContext;
    protected $_name = [
        'chatContexts' => 'ChatContexts',
        'contextId'    => 'ContextId',
        'userContext'  => 'UserContext',
    ];

    public function validate()
    {
        if (\is_array($this->chatContexts)) {
            Model::validateArray($this->chatContexts);
        }
        if (null !== $this->userContext) {
            $this->userContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatContexts) {
            if (\is_array($this->chatContexts)) {
                $res['ChatContexts'] = [];
                $n1                  = 0;
                foreach ($this->chatContexts as $item1) {
                    $res['ChatContexts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }

        if (null !== $this->userContext) {
            $res['UserContext'] = null !== $this->userContext ? $this->userContext->toArray($noStream) : $this->userContext;
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
        if (isset($map['ChatContexts'])) {
            if (!empty($map['ChatContexts'])) {
                $model->chatContexts = [];
                $n1                  = 0;
                foreach ($map['ChatContexts'] as $item1) {
                    $model->chatContexts[$n1++] = chatContexts::fromMap($item1);
                }
            }
        }

        if (isset($map['ContextId'])) {
            $model->contextId = $map['ContextId'];
        }

        if (isset($map['UserContext'])) {
            $model->userContext = userContext::fromMap($map['UserContext']);
        }

        return $model;
    }
}
