<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamPreloadTasksResponseBody\preloadTasksMessages;
use AlibabaCloud\Tea\Model;

class SetLiveStreamPreloadTasksResponseBody extends Model
{
    /**
     * @description The number of URLs for which the prefetch task configuration failed.
     *
     * @example 0
     *
     * @var int
     */
    public $failedURL;

    /**
     * @description The details of the prefetch task.
     *
     * @var preloadTasksMessages
     */
    public $preloadTasksMessages;

    /**
     * @description The ID of the request.
     *
     * @example 36E0E523-E0C6-5D95-A465-A8EA2DCBA2A5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the prefetch task. Valid values:
     *
     *   Success
     *   Failed
     *
     * >  Success is returned only if the prefetch task is configured for all specified streaming URLs.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of URLs for which the prefetch task is successfully configured.
     *
     * @example 1
     *
     * @var int
     */
    public $successURL;

    /**
     * @description The total number of URLs.
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedURL) {
            $res['FailedURL'] = $this->failedURL;
        }
        if (null !== $this->preloadTasksMessages) {
            $res['PreloadTasksMessages'] = null !== $this->preloadTasksMessages ? $this->preloadTasksMessages->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return SetLiveStreamPreloadTasksResponseBody
     */
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
