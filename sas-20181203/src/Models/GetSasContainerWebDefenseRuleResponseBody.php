<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody\containerWebDefenseRule;

class GetSasContainerWebDefenseRuleResponseBody extends Model
{
    /**
     * @var containerWebDefenseRule
     */
    public $containerWebDefenseRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerWebDefenseRule' => 'ContainerWebDefenseRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->containerWebDefenseRule) {
            $this->containerWebDefenseRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerWebDefenseRule) {
            $res['ContainerWebDefenseRule'] = null !== $this->containerWebDefenseRule ? $this->containerWebDefenseRule->toArray($noStream) : $this->containerWebDefenseRule;
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
        if (isset($map['ContainerWebDefenseRule'])) {
            $model->containerWebDefenseRule = containerWebDefenseRule::fromMap($map['ContainerWebDefenseRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
