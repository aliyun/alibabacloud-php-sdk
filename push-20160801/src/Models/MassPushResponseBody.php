<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponseBody\messageIds;
use AlibabaCloud\Tea\Model;

class MassPushResponseBody extends Model
{
    /**
     * @var messageIds
     */
    public $messageIds;

    /**
     * @example 9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageIds' => 'MessageIds',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageIds) {
            $res['MessageIds'] = null !== $this->messageIds ? $this->messageIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MessageIds'])) {
            $model->messageIds = messageIds::fromMap($map['MessageIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
