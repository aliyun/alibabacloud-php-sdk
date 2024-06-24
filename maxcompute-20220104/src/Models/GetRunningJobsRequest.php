<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetRunningJobsRequest extends Model
{
    /**
     * @description The time when the query starts. This parameter specifies the time when a job is submitted.
     *
     *   The time range that is specified by the **from** and **to** request parameters is a closed interval. The start time and end time are included in the range. If the value of **from** is the same as the value of **to**, the time range is invalid, and a null value is returned.
     *   The value is a UNIX timestamp that represents the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1683785928
     *
     * @var int
     */
    public $from;

    /**
     * @description The list of job executors.
     *
     * @var string[]
     */
    public $jobOwnerList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The list of nicknames of quotas that are used by jobs.
     *
     * @var string[]
     */
    public $quotaNicknameList;

    /**
     * @description The time when the query ends. This parameter specifies the time when a job is submitted.
     *
     *   The time interval that is specified by the **from** and **to** request parameters is a closed interval. The start time and end time are included in the interval. If the value of **from** is the same as the value of **to**, the interval is invalid, and a null value is returned.
     *   The value is a UNIX timestamp that represents the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1683612946
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'              => 'from',
        'jobOwnerList'      => 'jobOwnerList',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'quotaNicknameList' => 'quotaNicknameList',
        'to'                => 'to',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->jobOwnerList) {
            $res['jobOwnerList'] = $this->jobOwnerList;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->quotaNicknameList) {
            $res['quotaNicknameList'] = $this->quotaNicknameList;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRunningJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['jobOwnerList'])) {
            if (!empty($map['jobOwnerList'])) {
                $model->jobOwnerList = $map['jobOwnerList'];
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['quotaNicknameList'])) {
            if (!empty($map['quotaNicknameList'])) {
                $model->quotaNicknameList = $map['quotaNicknameList'];
            }
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
