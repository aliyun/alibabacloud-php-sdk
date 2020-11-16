<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponse\liveRecordNotifyConfig;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordNotifyConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveRecordNotifyConfig
     */
    public $liveRecordNotifyConfig;
    protected $_name = [
        'requestId'              => 'RequestId',
        'liveRecordNotifyConfig' => 'LiveRecordNotifyConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveRecordNotifyConfig', $this->liveRecordNotifyConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveRecordNotifyConfig) {
            $res['LiveRecordNotifyConfig'] = null !== $this->liveRecordNotifyConfig ? $this->liveRecordNotifyConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordNotifyConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveRecordNotifyConfig'])) {
            $model->liveRecordNotifyConfig = liveRecordNotifyConfig::fromMap($map['LiveRecordNotifyConfig']);
        }

        return $model;
    }
}
