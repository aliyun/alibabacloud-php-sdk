<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody\messageList;
use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupMessagesResponseBody extends Model
{
    /**
     * @description The ID of the group queried.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Indicates whether the current page is followed by another page.
     *
     * @example false
     *
     * @var bool
     */
    public $hasmore;

    /**
     * @description Details about the messages.
     *
     * @var messageList[]
     */
    public $messageList;

    /**
     * @description The starting page number for the next query. A value of 0 indicates that no further pages can be queried.
     *
     * @example 0
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The request ID.
     *
     * @example 1668FDC3-63D7-102F-B5D4-3D2F91D1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupId' => 'GroupId',
        'hasmore' => 'Hasmore',
        'messageList' => 'MessageList',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hasmore) {
            $res['Hasmore'] = $this->hasmore;
        }
        if (null !== $this->messageList) {
            $res['MessageList'] = [];
            if (null !== $this->messageList && \is_array($this->messageList)) {
                $n = 0;
                foreach ($this->messageList as $item) {
                    $res['MessageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListLiveMessageGroupMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Hasmore'])) {
            $model->hasmore = $map['Hasmore'];
        }
        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n = 0;
                foreach ($map['MessageList'] as $item) {
                    $model->messageList[$n++] = null !== $item ? messageList::fromMap($item) : $item;
                }
            }
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
