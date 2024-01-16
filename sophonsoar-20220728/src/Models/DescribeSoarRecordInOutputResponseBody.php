<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordInOutputResponseBody extends Model
{
    /**
     * @description The execution result of the component action.
     *
     * @example {
     * }
     * @var string
     */
    public $inOutputInfo;

    /**
     * @description The request ID.
     *
     * @example 372D8B41-AF8D-573A-9B3F-0924950F241F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inOutputInfo' => 'InOutputInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inOutputInfo) {
            $res['InOutputInfo'] = $this->inOutputInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarRecordInOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InOutputInfo'])) {
            $model->inOutputInfo = $map['InOutputInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
