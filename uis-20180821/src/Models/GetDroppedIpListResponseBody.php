<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetDroppedIpListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $droppedIpListUrl;
    protected $_name = [
        'requestId'        => 'RequestId',
        'droppedIpListUrl' => 'DroppedIpListUrl',
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
        if (null !== $this->droppedIpListUrl) {
            $res['DroppedIpListUrl'] = $this->droppedIpListUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDroppedIpListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DroppedIpListUrl'])) {
            $model->droppedIpListUrl = $map['DroppedIpListUrl'];
        }

        return $model;
    }
}
