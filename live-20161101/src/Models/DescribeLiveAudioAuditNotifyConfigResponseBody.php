<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;

class DescribeLiveAudioAuditNotifyConfigResponseBody extends Model
{
    /**
     * @var liveAudioAuditNotifyConfigList
     */
    public $liveAudioAuditNotifyConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAudioAuditNotifyConfigList' => 'LiveAudioAuditNotifyConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveAudioAuditNotifyConfigList) {
            $this->liveAudioAuditNotifyConfigList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveAudioAuditNotifyConfigList) {
            $res['LiveAudioAuditNotifyConfigList'] = null !== $this->liveAudioAuditNotifyConfigList ? $this->liveAudioAuditNotifyConfigList->toArray($noStream) : $this->liveAudioAuditNotifyConfigList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
