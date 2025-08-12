<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody\messageList;

class ListLiveMessageGroupMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $hasmore;

    /**
     * @var messageList[]
     */
    public $messageList;

    /**
     * @var int
     */
    public $nextPageToken;

    /**
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

    public function validate()
    {
        if (\is_array($this->messageList)) {
            Model::validateArray($this->messageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hasmore) {
            $res['Hasmore'] = $this->hasmore;
        }

        if (null !== $this->messageList) {
            if (\is_array($this->messageList)) {
                $res['MessageList'] = [];
                $n1 = 0;
                foreach ($this->messageList as $item1) {
                    $res['MessageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['MessageList'] as $item1) {
                    $model->messageList[$n1] = messageList::fromMap($item1);
                    ++$n1;
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
