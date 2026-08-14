<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetReviewRuleResponseBody\reviewRule;

class GetReviewRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reviewRule
     */
    public $reviewRule;
    protected $_name = [
        'requestId' => 'RequestId',
        'reviewRule' => 'ReviewRule',
    ];

    public function validate()
    {
        if (null !== $this->reviewRule) {
            $this->reviewRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->reviewRule) {
            $res['ReviewRule'] = null !== $this->reviewRule ? $this->reviewRule->toArray($noStream) : $this->reviewRule;
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

        if (isset($map['ReviewRule'])) {
            $model->reviewRule = reviewRule::fromMap($map['ReviewRule']);
        }

        return $model;
    }
}
