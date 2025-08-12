<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullStreamConfigResponseBody\liveAppRecordList;

class DescribeLivePullStreamConfigResponseBody extends Model
{
    /**
     * @var liveAppRecordList
     */
    public $liveAppRecordList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAppRecordList' => 'LiveAppRecordList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveAppRecordList) {
            $this->liveAppRecordList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveAppRecordList) {
            $res['LiveAppRecordList'] = null !== $this->liveAppRecordList ? $this->liveAppRecordList->toArray($noStream) : $this->liveAppRecordList;
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
        if (isset($map['LiveAppRecordList'])) {
            $model->liveAppRecordList = liveAppRecordList::fromMap($map['LiveAppRecordList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
