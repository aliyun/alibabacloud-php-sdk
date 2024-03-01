<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UnbindInstanceDomainsResponseBody extends Model
{
    /**
     * @description The number of domain names that failed to be unbound from the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The request ID.
     *
     * @example 123
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of domain names that are unbound from the instance.
     *
     * @example 2
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedCount'  => 'FailedCount',
        'requestId'    => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindInstanceDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
