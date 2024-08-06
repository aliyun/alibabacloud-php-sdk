<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyPerformanceViewResponseBody extends Model
{
    /**
     * @description The details about the access denial. This parameter is returned only if Resource Access Management (RAM) permission verification failed.
     *
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The modification result. Valid values:
     *
     *   **SUCCESS**
     *   **FAILED**
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $modifyStatus;

    /**
     * @description The request ID.
     *
     * @example C7EDB8E4-9769-4233-88C7-DCA4C9******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'modifyStatus'       => 'ModifyStatus',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->modifyStatus) {
            $res['ModifyStatus'] = $this->modifyStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPerformanceViewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['ModifyStatus'])) {
            $model->modifyStatus = $map['ModifyStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
