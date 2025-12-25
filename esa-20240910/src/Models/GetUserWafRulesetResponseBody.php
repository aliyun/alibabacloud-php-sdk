<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserWafRulesetResponseBody\ruleset;

class GetUserWafRulesetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleset
     */
    public $ruleset;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleset' => 'Ruleset',
    ];

    public function validate()
    {
        if (null !== $this->ruleset) {
            $this->ruleset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleset) {
            $res['Ruleset'] = null !== $this->ruleset ? $this->ruleset->toArray($noStream) : $this->ruleset;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Ruleset'])) {
            $model->ruleset = ruleset::fromMap($map['Ruleset']);
        }

        return $model;
    }
}
