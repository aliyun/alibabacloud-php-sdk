<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateInstantSiteMonitorResponseBody\createResultList;
use AlibabaCloud\Tea\Model;

class CreateInstantSiteMonitorResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * > The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The results for creating the instant test task.
     *
     * @var createResultList[]
     */
    public $createResultList;

    /**
     * @description The returned message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 68192f5d-0d45-4b98-9724-892813f86c71
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'createResultList' => 'CreateResultList',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
        if (null !== $this->createResultList) {
            $res['CreateResultList'] = [];
            if (null !== $this->createResultList && \is_array($this->createResultList)) {
                $n = 0;
                foreach ($this->createResultList as $item) {
                    $res['CreateResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateInstantSiteMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateResultList'])) {
            if (!empty($map['CreateResultList'])) {
                $model->createResultList = [];
                $n                       = 0;
                foreach ($map['CreateResultList'] as $item) {
                    $model->createResultList[$n++] = null !== $item ? createResultList::fromMap($item) : $item;
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
