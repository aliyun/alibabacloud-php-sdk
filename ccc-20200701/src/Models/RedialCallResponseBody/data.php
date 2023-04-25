<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody\data\callContext;
use AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody\data\userContext;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var callContext
     */
    public $callContext;

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
        'callContext' => 'CallContext',
        'contextId'   => 'ContextId',
        'userContext' => 'UserContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callContext) {
            $res['CallContext'] = null !== $this->callContext ? $this->callContext->toMap() : null;
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
        if (isset($map['CallContext'])) {
            $model->callContext = callContext::fromMap($map['CallContext']);
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
