<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAuditHistoryRequest extends Model
{
    /**
     * @description The reason why the video failed the review. If the video failed the review, specify the reason.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The ID of the video.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The review records.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The operation that you want to perform. Set the value to **GetAuditHistory**.
     *
     * @example 93ab850b4f6f44*****6e91d24d81d4
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy'   => 'SortBy',
        'videoId'  => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
