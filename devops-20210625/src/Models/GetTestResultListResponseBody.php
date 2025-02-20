<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult;

class GetTestResultListResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var testResult[]
     */
    public $testResult;
    protected $_name = [
        'errorCode'  => 'errorCode',
        'errorMsg'   => 'errorMsg',
        'requestId'  => 'requestId',
        'success'    => 'success',
        'testResult' => 'testResult',
    ];

    public function validate()
    {
        if (\is_array($this->testResult)) {
            Model::validateArray($this->testResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->testResult) {
            if (\is_array($this->testResult)) {
                $res['testResult'] = [];
                $n1                = 0;
                foreach ($this->testResult as $item1) {
                    $res['testResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['testResult'])) {
            if (!empty($map['testResult'])) {
                $model->testResult = [];
                $n1                = 0;
                foreach ($map['testResult'] as $item1) {
                    $model->testResult[$n1++] = testResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
