<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class CreateListenerResponseBody extends Model
{
    /**
     * @description The ID of the asynchronous task.
     *
     * @example 72dcd26b-f12d-4c27-b3af-18f6aed5****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the listener.
     *
     * @example lsn-o4u54y73wq7b******
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876*******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId'      => 'JobId',
        'listenerId' => 'ListenerId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateListenerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
