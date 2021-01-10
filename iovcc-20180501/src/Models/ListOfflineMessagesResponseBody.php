<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOfflineMessagesResponseBody\offlineMessages;
use AlibabaCloud\Tea\Model;

class ListOfflineMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var offlineMessages
     */
    public $offlineMessages;
    protected $_name = [
        'requestId'       => 'RequestId',
        'offlineMessages' => 'OfflineMessages',
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
        if (null !== $this->offlineMessages) {
            $res['OfflineMessages'] = null !== $this->offlineMessages ? $this->offlineMessages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOfflineMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OfflineMessages'])) {
            $model->offlineMessages = offlineMessages::fromMap($map['OfflineMessages']);
        }

        return $model;
    }
}
