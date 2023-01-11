<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackPolicyResponseBody extends Model
{
    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {"Statement": [{"Action": "Update:*", "Effect": "Allow","Principal": "*","Resource": "*"}]}
     *
     * @var mixed[]
     */
    public $stackPolicyBody;
    protected $_name = [
        'requestId'       => 'RequestId',
        'stackPolicyBody' => 'StackPolicyBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }

        return $model;
    }
}
