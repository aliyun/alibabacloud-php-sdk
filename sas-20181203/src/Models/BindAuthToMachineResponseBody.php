<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BindAuthToMachineResponseBody extends Model
{
    /**
     * @description The number of bound servers.
     *
     * @example 1
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description The shortage in the quota for cores of servers that can be protected.
     *
     * @example 1
     *
     * @var int
     */
    public $insufficientCoreCount;

    /**
     * @description The shortage in the quota for servers that can be protected.
     *
     * @example 1
     *
     * @var int
     */
    public $insufficientEcsCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 23AD0BD2-8771-5647-819E-6BA51E212F80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code that indicates the result. Valid values:
     *
     *   **0**: The servers are bound to or unbound from Security Center.
     *   **1**: The values that you specified for the parameters are invalid.
     *   **2**: The quota for servers that can be protected is insufficient.
     *   **3**: The quota for cores of servers that can be protected is insufficient.
     *
     * @example 2
     *
     * @var int
     */
    public $resultCode;

    /**
     * @description The number of unbound servers.
     *
     * @example 1
     *
     * @var int
     */
    public $unBindCount;
    protected $_name = [
        'bindCount'             => 'BindCount',
        'insufficientCoreCount' => 'InsufficientCoreCount',
        'insufficientEcsCount'  => 'InsufficientEcsCount',
        'requestId'             => 'RequestId',
        'resultCode'            => 'ResultCode',
        'unBindCount'           => 'UnBindCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->insufficientCoreCount) {
            $res['InsufficientCoreCount'] = $this->insufficientCoreCount;
        }
        if (null !== $this->insufficientEcsCount) {
            $res['InsufficientEcsCount'] = $this->insufficientEcsCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->unBindCount) {
            $res['UnBindCount'] = $this->unBindCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAuthToMachineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['InsufficientCoreCount'])) {
            $model->insufficientCoreCount = $map['InsufficientCoreCount'];
        }
        if (isset($map['InsufficientEcsCount'])) {
            $model->insufficientEcsCount = $map['InsufficientEcsCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['UnBindCount'])) {
            $model->unBindCount = $map['UnBindCount'];
        }

        return $model;
    }
}
