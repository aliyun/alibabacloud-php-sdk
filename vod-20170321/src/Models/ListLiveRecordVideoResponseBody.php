<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;
use AlibabaCloud\Tea\Model;

class ListLiveRecordVideoResponseBody extends Model
{
    /**
     * @description The list of videos.
     *
     * @var liveRecordVideoList
     */
    public $liveRecordVideoList;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-****-D7393642CA58
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of videos returned.
     *
     * @example 123
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'liveRecordVideoList' => 'LiveRecordVideoList',
        'requestId'           => 'RequestId',
        'total'               => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordVideoList) {
            $res['LiveRecordVideoList'] = null !== $this->liveRecordVideoList ? $this->liveRecordVideoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
