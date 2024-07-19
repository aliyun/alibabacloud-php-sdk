<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListGroupChatMessagesResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListGroupChatMessagesResponseBody\data\messages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @example 54d1a616d95a4a01ba58967a9115b649
     *
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'messages'      => 'Messages',
        'nextPageToken' => 'NextPageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        return $model;
    }
}
