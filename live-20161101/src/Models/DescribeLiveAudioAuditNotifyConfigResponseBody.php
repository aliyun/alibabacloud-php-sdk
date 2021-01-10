<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveAudioAuditNotifyConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveAudioAuditNotifyConfigList
     */
    public $liveAudioAuditNotifyConfigList;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'liveAudioAuditNotifyConfigList' => 'LiveAudioAuditNotifyConfigList',
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
        if (null !== $this->liveAudioAuditNotifyConfigList) {
            $res['LiveAudioAuditNotifyConfigList'] = null !== $this->liveAudioAuditNotifyConfigList ? $this->liveAudioAuditNotifyConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAudioAuditNotifyConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveAudioAuditNotifyConfigList'])) {
            $model->liveAudioAuditNotifyConfigList = liveAudioAuditNotifyConfigList::fromMap($map['LiveAudioAuditNotifyConfigList']);
        }

        return $model;
    }
}
