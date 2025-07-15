<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageAppsResponseBody\appList;
use AlibabaCloud\Tea\Model;

class ListLiveMessageAppsResponseBody extends Model
{
    /**
     * @description The interactive messaging applications.
     *
     * @var appList[]
     */
    public $appList;

    /**
     * @description Indicates whether the current page is followed by a page.
     *
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description The starting page number for the next query. This parameter is returned only if the value of HasMore is true.
     *
     * @example 1
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The ID of the request.
     *
     * @example B8EB4994-1368-1458-B9F3-5B88D76D734C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appList' => 'AppList',
        'hasMore' => 'HasMore',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appList) {
            $res['AppList'] = [];
            if (null !== $this->appList && \is_array($this->appList)) {
                $n = 0;
                foreach ($this->appList as $item) {
                    $res['AppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveMessageAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n = 0;
                foreach ($map['AppList'] as $item) {
                    $model->appList[$n++] = null !== $item ? appList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
