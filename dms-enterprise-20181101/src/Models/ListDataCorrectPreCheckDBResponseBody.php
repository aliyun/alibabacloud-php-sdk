<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponseBody\preCheckDBList;
use AlibabaCloud\Tea\Model;

class ListDataCorrectPreCheckDBResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var preCheckDBList[]
     */
    public $preCheckDBList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'errorMessage'   => 'ErrorMessage',
        'errorCode'      => 'ErrorCode',
        'preCheckDBList' => 'PreCheckDBList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->preCheckDBList) {
            $res['PreCheckDBList'] = [];
            if (null !== $this->preCheckDBList && \is_array($this->preCheckDBList)) {
                $n = 0;
                foreach ($this->preCheckDBList as $item) {
                    $res['PreCheckDBList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataCorrectPreCheckDBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['PreCheckDBList'])) {
            if (!empty($map['PreCheckDBList'])) {
                $model->preCheckDBList = [];
                $n                     = 0;
                foreach ($map['PreCheckDBList'] as $item) {
                    $model->preCheckDBList[$n++] = null !== $item ? preCheckDBList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
