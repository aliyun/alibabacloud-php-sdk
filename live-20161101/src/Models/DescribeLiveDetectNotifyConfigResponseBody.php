<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigResponseBody\liveDetectNotifyConfig;

class DescribeLiveDetectNotifyConfigResponseBody extends Model
{
    /**
     * @var liveDetectNotifyConfig
     */
    public $liveDetectNotifyConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveDetectNotifyConfig' => 'LiveDetectNotifyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveDetectNotifyConfig) {
            $this->liveDetectNotifyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveDetectNotifyConfig) {
            $res['LiveDetectNotifyConfig'] = null !== $this->liveDetectNotifyConfig ? $this->liveDetectNotifyConfig->toArray($noStream) : $this->liveDetectNotifyConfig;
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
        if (isset($map['LiveDetectNotifyConfig'])) {
            $model->liveDetectNotifyConfig = liveDetectNotifyConfig::fromMap($map['LiveDetectNotifyConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
