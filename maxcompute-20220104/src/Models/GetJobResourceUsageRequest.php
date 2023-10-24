<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetJobResourceUsageRequest extends Model
{
    /**
     * @description The date that is accurate to the day part for the query. The date must be in the yyyy-MM-dd format.
     *
     * @example 2023-05-15
     *
     * @var string
     */
    public $date;

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
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
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
    protected $_name = [
        'date'              => 'date',
        'jobOwnerList'      => 'jobOwnerList',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'quotaNicknameList' => 'quotaNicknameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobResourceUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
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

        return $model;
    }
}
