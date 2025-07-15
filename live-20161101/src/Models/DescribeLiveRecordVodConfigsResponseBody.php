<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordVodConfigsResponseBody extends Model
{
    /**
     * @description The configurations.
     *
     * @var liveRecordVodConfigs
     */
    public $liveRecordVodConfigs;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 5056369B-D337-499E-B8B7-B761BD37B08A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'liveRecordVodConfigs' => 'LiveRecordVodConfigs',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordVodConfigs) {
            $res['LiveRecordVodConfigs'] = null !== $this->liveRecordVodConfigs ? $this->liveRecordVodConfigs->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeLiveRecordVodConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecordVodConfigs'])) {
            $model->liveRecordVodConfigs = liveRecordVodConfigs::fromMap($map['LiveRecordVodConfigs']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
