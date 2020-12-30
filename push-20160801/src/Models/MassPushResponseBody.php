<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponseBody\messageIds;
use AlibabaCloud\Tea\Model;

class MassPushResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageIds
     */
    public $messageIds;
    protected $_name = [
        'requestId'  => 'RequestId',
        'messageIds' => 'MessageIds',
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
        if (null !== $this->messageIds) {
            $res['MessageIds'] = null !== $this->messageIds ? $this->messageIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MassPushResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageIds'])) {
            $model->messageIds = messageIds::fromMap($map['MessageIds']);
        }

        return $model;
    }
}
