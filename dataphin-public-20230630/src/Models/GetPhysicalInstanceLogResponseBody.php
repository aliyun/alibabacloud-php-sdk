<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceLogResponseBody\taskrunLogList;
use AlibabaCloud\Tea\Model;

class GetPhysicalInstanceLogResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 75DD06F8-1661-5A6E-B0A6-7E23133BDC60
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var taskrunLogList[]
     */
    public $taskrunLogList;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskrunLogList' => 'TaskrunLogList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (null !== $this->taskrunLogList) {
            $res['TaskrunLogList'] = [];
            if (null !== $this->taskrunLogList && \is_array($this->taskrunLogList)) {
                $n = 0;
                foreach ($this->taskrunLogList as $item) {
                    $res['TaskrunLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhysicalInstanceLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
        if (isset($map['TaskrunLogList'])) {
            if (!empty($map['TaskrunLogList'])) {
                $model->taskrunLogList = [];
                $n = 0;
                foreach ($map['TaskrunLogList'] as $item) {
                    $model->taskrunLogList[$n++] = null !== $item ? taskrunLogList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
