<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;
use AlibabaCloud\Tea\Model;

class ListLiveRecordVideoResponseBody extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveRecordVideoList
     */
    public $liveRecordVideoList;
    protected $_name = [
        'total'               => 'Total',
        'requestId'           => 'RequestId',
        'liveRecordVideoList' => 'LiveRecordVideoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveRecordVideoList) {
            $res['LiveRecordVideoList'] = null !== $this->liveRecordVideoList ? $this->liveRecordVideoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRecordVideoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveRecordVideoList'])) {
            $model->liveRecordVideoList = liveRecordVideoList::fromMap($map['LiveRecordVideoList']);
        }

        return $model;
    }
}
