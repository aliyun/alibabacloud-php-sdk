<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponse\liveRecordVodConfigs;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordVodConfigsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $total;

    /**
     * @var liveRecordVodConfigs
     */
    public $liveRecordVodConfigs;
    protected $_name = [
        'requestId'            => 'RequestId',
        'pageNum'              => 'PageNum',
        'pageSize'             => 'PageSize',
        'total'                => 'Total',
        'liveRecordVodConfigs' => 'LiveRecordVodConfigs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('liveRecordVodConfigs', $this->liveRecordVodConfigs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->liveRecordVodConfigs) {
            $res['LiveRecordVodConfigs'] = null !== $this->liveRecordVodConfigs ? $this->liveRecordVodConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordVodConfigsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['LiveRecordVodConfigs'])) {
            $model->liveRecordVodConfigs = liveRecordVodConfigs::fromMap($map['LiveRecordVodConfigs']);
        }

        return $model;
    }
}
