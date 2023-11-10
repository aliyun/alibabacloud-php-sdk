<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceConnectivityResponseBody extends Model
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
     * @example Src ip:39.106.64.59 not in user whitelist
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
     * @description The instance ID.
     *
     * @example rm-2ze2za3is7baay1w4
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @description The request ID.
     *
     * @example D880212A-F21F-5722-8422-BD06B2874CC3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connCheckErrorCode'    => 'ConnCheckErrorCode',
        'connCheckErrorMessage' => 'ConnCheckErrorMessage',
        'connCheckResult'       => 'ConnCheckResult',
        'dbInstanceName'        => 'DbInstanceName',
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
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceConnectivityResponseBody
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
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
