<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class CheckSensitiveResponseBody extends Model
{
    /**
     * @var string
     */
    public $checkMessage;

    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'checkMessage' => 'CheckMessage',
        'checkResult'  => 'CheckResult',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkMessage) {
            $res['CheckMessage'] = $this->checkMessage;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSensitiveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckMessage'])) {
            $model->checkMessage = $map['CheckMessage'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
