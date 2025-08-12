<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages;

class SetLiveStreamPreloadTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $failedURL;

    /**
     * @var preloadTasksMessages
     */
    public $preloadTasksMessages;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successURL;

    /**
     * @var int
     */
    public $totalURL;
    protected $_name = [
        'failedURL' => 'FailedURL',
        'preloadTasksMessages' => 'PreloadTasksMessages',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'successURL' => 'SuccessURL',
        'totalURL' => 'TotalURL',
    ];

    public function validate()
    {
        if (null !== $this->preloadTasksMessages) {
            $this->preloadTasksMessages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedURL) {
            $res['FailedURL'] = $this->failedURL;
        }

        if (null !== $this->preloadTasksMessages) {
            $res['PreloadTasksMessages'] = null !== $this->preloadTasksMessages ? $this->preloadTasksMessages->toArray($noStream) : $this->preloadTasksMessages;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successURL) {
            $res['SuccessURL'] = $this->successURL;
        }

        if (null !== $this->totalURL) {
            $res['TotalURL'] = $this->totalURL;
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
        if (isset($map['FailedURL'])) {
            $model->failedURL = $map['FailedURL'];
        }

        if (isset($map['PreloadTasksMessages'])) {
            $model->preloadTasksMessages = preloadTasksMessages::fromMap($map['PreloadTasksMessages']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessURL'])) {
            $model->successURL = $map['SuccessURL'];
        }

        if (isset($map['TotalURL'])) {
            $model->totalURL = $map['TotalURL'];
        }

        return $model;
    }
}
