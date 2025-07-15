<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponseBody\liveRecordNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordNotifyConfigResponseBody extends Model
{
    /**
     * @description The configuration of callbacks for live stream recording.
     *
     * @var liveRecordNotifyConfig
     */
    public $liveRecordNotifyConfig;

    /**
     * @description The request ID.
     *
     * @example 5056369B-D337-499E-B8B7-B761BD37B08A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveRecordNotifyConfig' => 'LiveRecordNotifyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordNotifyConfig) {
            $res['LiveRecordNotifyConfig'] = null !== $this->liveRecordNotifyConfig ? $this->liveRecordNotifyConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordNotifyConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecordNotifyConfig'])) {
            $model->liveRecordNotifyConfig = liveRecordNotifyConfig::fromMap($map['LiveRecordNotifyConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
