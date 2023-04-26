<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRecordVideoRequest extends Model
{
    /**
     * @description The sorting rule of results. Valid values:
     *
     *   **CreationTime:Desc**: sorts the results based on the creation time in descending order. This is the default value.
     *   **CreationTime:Asc**: sorts the results based on the creation time in ascending order.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The operation that you want to perform. Set the value to **ListLiveRecordVideo**.
     *
     * @example The number of entries to return on each page. Maximum value: **100**. Default value: **10**.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description CreationTime:Desc
     *
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the recorded live stream.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The duration of the video. Unit: seconds.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The name of the video category.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the video. Valid values:
     *
     *   **Uploading:**: indicates that the video is being uploaded.
     *   **UploadFail**: indicates that the video failed to be uploaded.
     *   **UploadSucces**: indicates that the video was uploaded.
     *   **Transcoding**: indicates that the video is being transcoded.
     *   **TranscodeFail**: indicates that the video failed to be transcoded.
     *   **Blocked**: indicates that the video is blocked.
     *   **Normal**: indicates that the video is in a normal state.
     *
     * @example live-test
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'    => 'AppName',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
        'startTime'  => 'StartTime',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRecordVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
