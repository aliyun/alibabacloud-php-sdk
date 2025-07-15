<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveAudioAuditConfigResponseBody extends Model
{
    /**
     * @description The list of audio moderation configurations.
     *
     * @var liveAudioAuditConfigList
     */
    public $liveAudioAuditConfigList;

    /**
     * @description The request ID.
     *
     * @example 7BF95F2A-3B24-4CDE-9346-7F6FA86697A1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAudioAuditConfigList' => 'LiveAudioAuditConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAudioAuditConfigList) {
            $res['LiveAudioAuditConfigList'] = null !== $this->liveAudioAuditConfigList ? $this->liveAudioAuditConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAudioAuditConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAudioAuditConfigList'])) {
            $model->liveAudioAuditConfigList = liveAudioAuditConfigList::fromMap($map['LiveAudioAuditConfigList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
