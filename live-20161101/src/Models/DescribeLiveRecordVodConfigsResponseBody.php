<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordVodConfigsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var liveRecordVodConfigs
     */
    public $liveRecordVodConfigs;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'pageNum'              => 'PageNum',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'liveRecordVodConfigs' => 'LiveRecordVodConfigs',
        'total'                => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->liveRecordVodConfigs) {
            $res['LiveRecordVodConfigs'] = null !== $this->liveRecordVodConfigs ? $this->liveRecordVodConfigs->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordVodConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['LiveRecordVodConfigs'])) {
            $model->liveRecordVodConfigs = liveRecordVodConfigs::fromMap($map['LiveRecordVodConfigs']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
