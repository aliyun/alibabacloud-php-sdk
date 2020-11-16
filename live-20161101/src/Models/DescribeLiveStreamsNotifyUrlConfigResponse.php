<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigResponse\liveStreamsNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsNotifyUrlConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveStreamsNotifyConfig
     */
    public $liveStreamsNotifyConfig;
    protected $_name = [
        'requestId'               => 'RequestId',
        'liveStreamsNotifyConfig' => 'LiveStreamsNotifyConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveStreamsNotifyConfig', $this->liveStreamsNotifyConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveStreamsNotifyConfig) {
            $res['LiveStreamsNotifyConfig'] = null !== $this->liveStreamsNotifyConfig ? $this->liveStreamsNotifyConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveStreamsNotifyConfig'])) {
            $model->liveStreamsNotifyConfig = liveStreamsNotifyConfig::fromMap($map['LiveStreamsNotifyConfig']);
        }

        return $model;
    }
}
