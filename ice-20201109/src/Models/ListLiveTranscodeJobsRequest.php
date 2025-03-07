<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListLiveTranscodeJobsRequest extends Model
{
    /**
     * @description The search keyword. You can use the job ID or name as the keyword to search for jobs. If you search for jobs by name, fuzzy match is supported.
     *
     * @example 24ecbb5c-4f98-4194-9400-f17102e27fc5
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order. Valid values:
     *
     *   asc
     *   desc
     *
     * @example asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The start mode of the transcoding job.
     *
     *   0: The transcoding job immediately starts.
     *   1: The transcoding job starts at the scheduled time.
     *
     * @example 0
     *
     * @var int
     */
    public $startMode;

    /**
     * @description The state of the job.
     *
     * 0: The job is not started. 1: The job is in progress. 2: The job is stopped.
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the template used by the transcoding job.
     *
     *   normal
     *   narrow-band
     *   audio-only
     *   origin
     *
     * @example normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'keyWord'   => 'KeyWord',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'sortBy'    => 'SortBy',
        'startMode' => 'StartMode',
        'status'    => 'Status',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
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
        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveTranscodeJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
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
        if (isset($map['StartMode'])) {
            $model->startMode = $map['StartMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
