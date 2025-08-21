<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponseBody\messageIds;

class MassPushResponseBody extends Model
{
    /**
     * @var messageIds
     */
    public $messageIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageIds' => 'MessageIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->messageIds) {
            $this->messageIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageIds) {
            $res['MessageIds'] = null !== $this->messageIds ? $this->messageIds->toArray($noStream) : $this->messageIds;
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
        if (isset($map['MessageIds'])) {
            $model->messageIds = messageIds::fromMap($map['MessageIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
