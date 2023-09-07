<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterConnectivityResponseBody extends Model
{
    /**
     * @description The error code for connection diagnosis. Valid values:
     *
     *   **SRC_IP_NOT_IN_USER_WHITELIST**: The source IP address is not added to the whitelist.
     *   **CONNECTION_ABNORMAL**: The connection to the cluster is normal.
     *
     * @example SRC_IP_NOT_IN_USER_WHITELIST
     *
     * @var string
     */
    public $connCheckErrorCode;

    /**
     * @description The error message for connection diagnosis.
     *
     * @example Src ip:192.***.***.1 not in user whitelist
     *
     * @var string
     */
    public $connCheckErrorMessage;

    /**
     * @description The connection diagnosis result. Valid values:
     *
     *   **Success**
     *   **Failed**
     *
     * @example Failed
     *
     * @var string
     */
    public $connCheckResult;

    /**
     * @description The cluster ID.
     *
     * @example pc-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The request ID.
     *
     * @example 73A85BAF-1039-4CDE-A83F-1A140F******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connCheckErrorCode'    => 'ConnCheckErrorCode',
        'connCheckErrorMessage' => 'ConnCheckErrorMessage',
        'connCheckResult'       => 'ConnCheckResult',
        'DBClusterId'           => 'DBClusterId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connCheckErrorCode) {
            $res['ConnCheckErrorCode'] = $this->connCheckErrorCode;
        }
        if (null !== $this->connCheckErrorMessage) {
            $res['ConnCheckErrorMessage'] = $this->connCheckErrorMessage;
        }
        if (null !== $this->connCheckResult) {
            $res['ConnCheckResult'] = $this->connCheckResult;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterConnectivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnCheckErrorCode'])) {
            $model->connCheckErrorCode = $map['ConnCheckErrorCode'];
        }
        if (isset($map['ConnCheckErrorMessage'])) {
            $model->connCheckErrorMessage = $map['ConnCheckErrorMessage'];
        }
        if (isset($map['ConnCheckResult'])) {
            $model->connCheckResult = $map['ConnCheckResult'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
