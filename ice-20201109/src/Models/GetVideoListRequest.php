<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetVideoListRequest extends Model
{
    /**
     * @description The ID of the category.
     *
     * @example 781111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-01-11T12:59:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting method of the results. Valid values:
     *
     *   CreationTime:Desc (default): sorts results in reverse chronological order.
     *   CreationTime:Asc: sorts results in chronological order.
     *
     * @example CreationTime:Asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the video. You can specify multiple video statuses and separate them with commas (,).
     *
     * Valid values:
     *
     *   PrepareFail: The file is abnormal.
     *   UploadFail: The video failed to be uploaded.
     *   UploadSucc: The video is uploaded.
     *   Transcoding: The video is being transcoded.
     *   TranscodeFail: The video failed to be transcoded.
     *   ProduceFail: The video failed to be produced.
     *   Normal: The video is normal.
     *   Uploading: The video is being uploaded.
     *   Preparing: The file is being generated.
     *   Blocked: The video is blocked.
     *   checking: The video is being reviewed.
     *
     * @example Uploading,Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cateId'    => 'CateId',
        'endTime'   => 'EndTime',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'sortBy'    => 'SortBy',
        'startTime' => 'StartTime',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
