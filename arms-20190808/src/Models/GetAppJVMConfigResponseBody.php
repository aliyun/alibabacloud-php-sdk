<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppJVMConfigResponseBody\jvmInfoList;
use AlibabaCloud\Tea\Model;

class GetAppJVMConfigResponseBody extends Model
{
    /**
     * @description The response code. Valid values: 2XX: The request is successful. 3XX: A redirection message is returned. 4XX: The request is invalid. 5XX: A server error occurs.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The list of JVM information.
     *
     * @var jvmInfoList[]
     */
    public $jvmInfoList;

    /**
     * @description The error message returned if the request failed.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 1A9C645C-C83F-4C9D-8CCB-29BEC9E1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'jvmInfoList' => 'JvmInfoList',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->jvmInfoList) {
            $res['JvmInfoList'] = [];
            if (null !== $this->jvmInfoList && \is_array($this->jvmInfoList)) {
                $n = 0;
                foreach ($this->jvmInfoList as $item) {
                    $res['JvmInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetAppJVMConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['JvmInfoList'])) {
            if (!empty($map['JvmInfoList'])) {
                $model->jvmInfoList = [];
                $n                  = 0;
                foreach ($map['JvmInfoList'] as $item) {
                    $model->jvmInfoList[$n++] = null !== $item ? jvmInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
