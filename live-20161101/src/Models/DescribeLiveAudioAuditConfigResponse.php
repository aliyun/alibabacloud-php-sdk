<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponse\liveAudioAuditConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveAudioAuditConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveAudioAuditConfigList
     */
    public $liveAudioAuditConfigList;
    protected $_name = [
        'requestId'                => 'RequestId',
        'liveAudioAuditConfigList' => 'LiveAudioAuditConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveAudioAuditConfigList', $this->liveAudioAuditConfigList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveAudioAuditConfigList) {
            $res['LiveAudioAuditConfigList'] = null !== $this->liveAudioAuditConfigList ? $this->liveAudioAuditConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAudioAuditConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveAudioAuditConfigList'])) {
            $model->liveAudioAuditConfigList = liveAudioAuditConfigList::fromMap($map['LiveAudioAuditConfigList']);
        }

        return $model;
    }
}
