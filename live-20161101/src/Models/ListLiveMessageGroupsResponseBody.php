<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupsResponseBody\groupList;
use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupsResponseBody extends Model
{
    /**
     * @description Details about the groups.
     *
     * @var groupList[]
     */
    public $groupList;

    /**
     * @description Indicates whether the current page is followed by another page.
     *
     * @example false
     *
     * @var bool
     */
    public $hasmore;

    /**
     * @description The starting page number for the next query. This parameter is returned only if the value of Hasmore is true.
     *
     * @example 1001
     *
     * @var string
     */
    public $nextpageToken;

    /**
     * @description The request ID.
     *
     * @example B5D95365-5A46-1A6A-BBF5-C7B6BDED****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupList' => 'GroupList',
        'hasmore' => 'Hasmore',
        'nextpageToken' => 'NextpageToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupList) {
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasmore) {
            $res['Hasmore'] = $this->hasmore;
        }
        if (null !== $this->nextpageToken) {
            $res['NextpageToken'] = $this->nextpageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveMessageGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Hasmore'])) {
            $model->hasmore = $map['Hasmore'];
        }
        if (isset($map['NextpageToken'])) {
            $model->nextpageToken = $map['NextpageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
