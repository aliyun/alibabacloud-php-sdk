<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;

class ListLiveRecordVideoResponseBody extends Model
{
    /**
     * @var liveRecordVideoList
     */
    public $liveRecordVideoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'liveRecordVideoList' => 'LiveRecordVideoList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->liveRecordVideoList) {
            $this->liveRecordVideoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveRecordVideoList) {
            $res['LiveRecordVideoList'] = null !== $this->liveRecordVideoList ? $this->liveRecordVideoList->toArray($noStream) : $this->liveRecordVideoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['LiveRecordVideoList'])) {
            $model->liveRecordVideoList = liveRecordVideoList::fromMap($map['LiveRecordVideoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
