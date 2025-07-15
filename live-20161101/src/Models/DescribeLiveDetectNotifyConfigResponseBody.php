<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigResponseBody\liveDetectNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveDetectNotifyConfigResponseBody extends Model
{
    /**
     * @description The callback configuration.
     *
     * @var liveDetectNotifyConfig
     */
    public $liveDetectNotifyConfig;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveDetectNotifyConfig' => 'LiveDetectNotifyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDetectNotifyConfig) {
            $res['LiveDetectNotifyConfig'] = null !== $this->liveDetectNotifyConfig ? $this->liveDetectNotifyConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LiveDetectNotifyConfig'])) {
            $model->liveDetectNotifyConfig = liveDetectNotifyConfig::fromMap($map['LiveDetectNotifyConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
