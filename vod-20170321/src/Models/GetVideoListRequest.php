<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoListRequest extends Model
{
    /**
     * @description The ID of the video category.
     *
     * @example 781111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The end of the time range for querying videos based on their creation time. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2017-01-11T12:59:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Optional. The number of entries to return on each page. Default value: **10**. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The method for sorting the results. Valid values:
     *
     *   **CreationTime:Desc** (default): The results are sorted in reverse chronological order based on the creation time.
     *   **CreationTime:Asc**: The results are sorted in chronological order based on the creation time.
     *
     * @example CreationTime:Asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range for querying videos based on their creation time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the video. By default, you can obtain videos in all states. Separate multiple states with commas (,). Valid values:
     *
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video fails to be uploaded.
     *   **UploadSucc**: The video is uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video fails to be transcoded.
     *   **Blocked**: The video is blocked.
     *   **Normal**: The video can be played.
     *
     * @example Uploading,Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The Object Storage Service (OSS) bucket where the video file is stored.
     *
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;
    protected $_name = [
        'cateId'          => 'CateId',
        'endTime'         => 'EndTime',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'sortBy'          => 'SortBy',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'storageLocation' => 'StorageLocation',
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
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
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
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        return $model;
    }
}
