<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateConditionalAccessPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $conditionalAccessPolicyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionalAccessPolicyId' => 'ConditionalAccessPolicyId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicyId) {
            $res['ConditionalAccessPolicyId'] = $this->conditionalAccessPolicyId;
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
        if (isset($map['ConditionalAccessPolicyId'])) {
            $model->conditionalAccessPolicyId = $map['ConditionalAccessPolicyId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
