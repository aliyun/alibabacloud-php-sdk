<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\MuteCallResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\MuteCallResponseBody\data\callContext;
use AlibabaCloud\SDK\CCC\V20200701\Models\MuteCallResponseBody\data\userContext;

class data extends Model
{
    /**
     * @var callContext
     */
    public $callContext;

    /**
     * @var userContext
     */
    public $userContext;
    protected $_name = [
        'callContext' => 'CallContext',
        'userContext' => 'UserContext',
    ];

    public function validate()
    {
        if (null !== $this->callContext) {
            $this->callContext->validate();
        }
        if (null !== $this->userContext) {
            $this->userContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callContext) {
            $res['CallContext'] = null !== $this->callContext ? $this->callContext->toArray($noStream) : $this->callContext;
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
        if (isset($map['CallContext'])) {
            $model->callContext = callContext::fromMap($map['CallContext']);
        }

        if (isset($map['UserContext'])) {
            $model->userContext = userContext::fromMap($map['UserContext']);
        }

        return $model;
    }
}
