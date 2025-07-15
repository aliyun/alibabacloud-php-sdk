<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveAudioAuditNotifyConfigResponseBody extends Model
{
    /**
     * @description The configuration of callbacks for audio moderation results.
     *
     * @var liveAudioAuditNotifyConfigList
     */
    public $liveAudioAuditNotifyConfigList;

    /**
     * @description The request ID.
     *
     * @example B908FF89-B03C-4831-B55B-48D2A******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAudioAuditNotifyConfigList' => 'LiveAudioAuditNotifyConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAudioAuditNotifyConfigList) {
            $res['LiveAudioAuditNotifyConfigList'] = null !== $this->liveAudioAuditNotifyConfigList ? $this->liveAudioAuditNotifyConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LiveAudioAuditNotifyConfigList'])) {
            $model->liveAudioAuditNotifyConfigList = liveAudioAuditNotifyConfigList::fromMap($map['LiveAudioAuditNotifyConfigList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
