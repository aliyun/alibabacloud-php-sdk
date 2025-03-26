<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceConnectivityResponseBody extends Model
{
    /**
     * @var string
     */
    public $connCheckErrorCode;

    /**
     * @var string
     */
    public $connCheckErrorMessage;

    /**
     * @var string
     */
    public $connCheckResult;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connCheckErrorCode' => 'ConnCheckErrorCode',
        'connCheckErrorMessage' => 'ConnCheckErrorMessage',
        'connCheckResult' => 'ConnCheckResult',
        'dbInstanceName' => 'DbInstanceName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
