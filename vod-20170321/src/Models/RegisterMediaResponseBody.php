<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody\registeredMediaList;
use AlibabaCloud\Tea\Model;

class RegisterMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $failedFileURLs;

    /**
     * @var registeredMediaList[]
     */
    public $registeredMediaList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'failedFileURLs'      => 'FailedFileURLs',
        'registeredMediaList' => 'RegisteredMediaList',
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
