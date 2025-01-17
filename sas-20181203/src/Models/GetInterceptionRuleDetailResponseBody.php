<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail;

class GetInterceptionRuleDetailResponseBody extends Model
{
    /**
     * @var interceptionRuleDetail
     */
    public $interceptionRuleDetail;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionRuleDetail' => 'InterceptionRuleDetail',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->interceptionRuleDetail) {
            $this->interceptionRuleDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interceptionRuleDetail) {
            $res['InterceptionRuleDetail'] = null !== $this->interceptionRuleDetail ? $this->interceptionRuleDetail->toArray($noStream) : $this->interceptionRuleDetail;
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
        if (isset($map['InterceptionRuleDetail'])) {
            $model->interceptionRuleDetail = interceptionRuleDetail::fromMap($map['InterceptionRuleDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
