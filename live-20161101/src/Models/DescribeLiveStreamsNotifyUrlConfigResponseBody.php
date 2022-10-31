<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigResponseBody\liveStreamsNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsNotifyUrlConfigResponseBody extends Model
{
    /**
     * @var liveStreamsNotifyConfig
     */
    public $liveStreamsNotifyConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamsNotifyConfig' => 'LiveStreamsNotifyConfig',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamsNotifyConfig) {
            $res['LiveStreamsNotifyConfig'] = null !== $this->liveStreamsNotifyConfig ? $this->liveStreamsNotifyConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamsNotifyConfig'])) {
            $model->liveStreamsNotifyConfig = liveStreamsNotifyConfig::fromMap($map['LiveStreamsNotifyConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
