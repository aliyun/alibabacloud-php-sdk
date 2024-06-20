<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data\chatContexts;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data\userContext;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var chatContexts[]
     */
    public $chatContexts;

    /**
     * @example 123456789
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatContexts) {
            $res['ChatContexts'] = [];
            if (null !== $this->chatContexts && \is_array($this->chatContexts)) {
                $n = 0;
                foreach ($this->chatContexts as $item) {
                    $res['ChatContexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }
        if (null !== $this->userContext) {
            $res['UserContext'] = null !== $this->userContext ? $this->userContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatContexts'])) {
            if (!empty($map['ChatContexts'])) {
                $model->chatContexts = [];
                $n                   = 0;
                foreach ($map['ChatContexts'] as $item) {
                    $model->chatContexts[$n++] = null !== $item ? chatContexts::fromMap($item) : $item;
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
