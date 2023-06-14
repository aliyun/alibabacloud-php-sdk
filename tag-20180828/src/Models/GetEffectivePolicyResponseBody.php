<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class GetEffectivePolicyResponseBody extends Model
{
    /**
     * @description The effective tag policy.
     *
     * @example {\"tags\":{\"costcenter\":{\"tag_value\":[\"Beijing\",\"Shanghai\"],\"tag_key\":\"CostCenter\"}}}
     *
     * @var string
     */
    public $effectivePolicy;

    /**
     * @description The ID of the request.
     *
     * @example BB532282-94F5-5F56-877F-32D5E2A04F3F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'effectivePolicy' => 'EffectivePolicy',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectivePolicy) {
            $res['EffectivePolicy'] = $this->effectivePolicy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEffectivePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectivePolicy'])) {
            $model->effectivePolicy = $map['EffectivePolicy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
