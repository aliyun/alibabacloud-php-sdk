<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class TransformExpressionToMatchResponseBody extends Model
{
    /**
     * @var WafRuleMatch
     */
    public $match;

    /**
     * @description Id of the request
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'match'     => 'Match',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['Match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformExpressionToMatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Match'])) {
            $model->match = WafRuleMatch::fromMap($map['Match']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
