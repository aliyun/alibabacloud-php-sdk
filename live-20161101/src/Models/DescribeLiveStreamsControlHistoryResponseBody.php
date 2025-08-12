<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponseBody\controlInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->controlInfo) {
            $this->controlInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlInfo) {
            $res['ControlInfo'] = null !== $this->controlInfo ? $this->controlInfo->toArray($noStream) : $this->controlInfo;
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
        if (isset($map['ControlInfo'])) {
            $model->controlInfo = controlInfo::fromMap($map['ControlInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
