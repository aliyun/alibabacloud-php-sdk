<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class EnableCustomScenePolicyResponseBody extends Model
{
    /**
     * @description The policy ID.
     *
     * @example 1
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The request ID.
     *
     * @example 65C66B7B-671A-8297-9187-2R5477247B76
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyId' => 'PolicyId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableCustomScenePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
