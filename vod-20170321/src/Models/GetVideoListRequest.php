<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoListRequest extends Model
{
    /**
     * @description The category ID. You can use one of the following methods to obtain the category ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Management** > **Categories** to view the category ID.
     *   Obtain the value of CateId from the response to the [AddCategory](~~56401~~) operation.
     *   Obtain the value of CateId from the response to the [GetCategories](~~56406~~) operation.
     *
     * @example 781111
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
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
     * @description The number of entries to return on each page. Default value: **10**. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting method of the results. Valid values:
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
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The video status. You can specify multiple video statuses and separate them with commas (,). Valid values:
     *
     *   **Uploading**: The video is being uploaded.
     *   **UploadFail**: The video failed to be uploaded.
     *   **UploadSucc**: The video has been uploaded.
     *   **Transcoding**: The video is being transcoded.
     *   **TranscodeFail**: The video failed to be transcoded.
     *   **checking**: The video is being reviewed.
     *   **Blocked**: The video is blocked.
     *   **Normal**: The video is normal.
     *   **ProduceFail**: The video failed to be produced.
     *
     * For more information about each video status, see the "Status: the status of a video" section of the [Basic data types](~~52839#section-p7c-jgy-070~~) topic.
     * @example Uploading,Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage address of the media file.
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
