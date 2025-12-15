<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDbInstanceConnectivityResponseBody extends Model
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
    public $requestId;
    protected $_name = [
        'connCheckErrorCode' => 'ConnCheckErrorCode',
        'connCheckErrorMessage' => 'ConnCheckErrorMessage',
        'connCheckResult' => 'ConnCheckResult',
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
