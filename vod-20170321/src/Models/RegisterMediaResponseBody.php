<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody\registeredMediaList;
use AlibabaCloud\Tea\Model;

class RegisterMediaResponseBody extends Model
{
    /**
     * @description ## RegisterMetadata
     *
     * | CoverURL | String | No | The URL of the thumbnail. The URL can be up to 1,024 bytes in length. |
     * | CateId | Long | No | The category ID of the media file. You can use one of the following methods to obtain the category ID: <br>Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories**. On the Categories page, you can view the category ID of the media file.  <br>View the value of the CateId parameter returned by the [AddCategory](~~AddCategory~~) operation that you called to create a category.  <br>View the value of the CateId parameter returned by the [GetCategories](~~GetCategories~~) operation that you called to query a category. |
     * @var string[]
     */
    public $failedFileURLs;

    /**
     * @var registeredMediaList[]
     */
    public $registeredMediaList;

    /**
     * @description The OSS URL of the media file.
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
