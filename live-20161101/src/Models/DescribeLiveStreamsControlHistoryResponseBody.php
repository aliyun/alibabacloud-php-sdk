<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponseBody\controlInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsControlHistoryResponseBody extends Model
{
    /**
     * @var controlInfo
     */
    public $controlInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlInfo' => 'ControlInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlInfo) {
            $res['ControlInfo'] = null !== $this->controlInfo ? $this->controlInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsControlHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlInfo'])) {
            $model->controlInfo = controlInfo::fromMap($map['ControlInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
