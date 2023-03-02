<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ScanSensitiveDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the check.
     *
     * sensDatas indicates the rules that are used to check the sensitive data. sensDatas includes the following parameters:
     *
     *   hitCount: the number of times that the sensitive data hits the rule
     *   ruleName: the name of the rule
     *
     * @var mixed[]
     */
    public $sensitives;
    protected $_name = [
        'requestId'  => 'RequestId',
        'sensitives' => 'Sensitives',
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
        if (null !== $this->sensitives) {
            $res['Sensitives'] = $this->sensitives;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanSensitiveDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sensitives'])) {
            $model->sensitives = $map['Sensitives'];
        }

        return $model;
    }
}
