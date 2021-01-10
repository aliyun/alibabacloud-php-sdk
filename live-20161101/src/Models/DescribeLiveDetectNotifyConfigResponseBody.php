<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigResponseBody\liveDetectNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveDetectNotifyConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveDetectNotifyConfig
     */
    public $liveDetectNotifyConfig;
    protected $_name = [
        'requestId'              => 'RequestId',
        'liveDetectNotifyConfig' => 'LiveDetectNotifyConfig',
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
        if (null !== $this->liveDetectNotifyConfig) {
            $res['LiveDetectNotifyConfig'] = null !== $this->liveDetectNotifyConfig ? $this->liveDetectNotifyConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDetectNotifyConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveDetectNotifyConfig'])) {
            $model->liveDetectNotifyConfig = liveDetectNotifyConfig::fromMap($map['LiveDetectNotifyConfig']);
        }

        return $model;
    }
}
