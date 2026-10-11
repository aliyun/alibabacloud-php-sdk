<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesResponseBody\egressProxyRules;

class CreateEgressProxyRulesResponseBody extends Model
{
    /**
     * @var egressProxyRules
     */
    public $egressProxyRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'egressProxyRules' => 'EgressProxyRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->egressProxyRules) {
            $this->egressProxyRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyRules) {
            $res['EgressProxyRules'] = null !== $this->egressProxyRules ? $this->egressProxyRules->toArray($noStream) : $this->egressProxyRules;
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
        if (isset($map['EgressProxyRules'])) {
            $model->egressProxyRules = egressProxyRules::fromMap($map['EgressProxyRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
