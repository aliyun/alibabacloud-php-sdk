<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody\registeredMediaList;
use AlibabaCloud\Tea\Model;

class RegisterMediaResponseBody extends Model
{
    /**
     * @description The URLs of the media files that failed to be registered.
     *
     * @var string[]
     */
    public $failedFileURLs;

    /**
     * @description The media files that are registered, including newly registered and repeatedly registered media files.
     *
     * @var registeredMediaList[]
     */
    public $registeredMediaList;

    /**
     * @description The ID of the request.
     *
     * @example 14F43C5C-8033-448B-AD04F64E5098****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedFileURLs'      => 'FailedFileURLs',
        'registeredMediaList' => 'RegisteredMediaList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedFileURLs) {
            $res['FailedFileURLs'] = $this->failedFileURLs;
        }
        if (null !== $this->registeredMediaList) {
            $res['RegisteredMediaList'] = [];
            if (null !== $this->registeredMediaList && \is_array($this->registeredMediaList)) {
                $n = 0;
                foreach ($this->registeredMediaList as $item) {
                    $res['RegisteredMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedFileURLs'])) {
            if (!empty($map['FailedFileURLs'])) {
                $model->failedFileURLs = $map['FailedFileURLs'];
            }
        }
        if (isset($map['RegisteredMediaList'])) {
            if (!empty($map['RegisteredMediaList'])) {
                $model->registeredMediaList = [];
                $n                          = 0;
                foreach ($map['RegisteredMediaList'] as $item) {
                    $model->registeredMediaList[$n++] = null !== $item ? registeredMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
