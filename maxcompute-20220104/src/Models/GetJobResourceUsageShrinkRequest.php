<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetJobResourceUsageShrinkRequest extends Model
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
     * @var string
     */
    public $jobOwnerListShrink;

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
     * @var string
     */
    public $quotaNicknameListShrink;
    protected $_name = [
        'date'                    => 'date',
        'jobOwnerListShrink'      => 'jobOwnerList',
        'pageNumber'              => 'pageNumber',
        'pageSize'                => 'pageSize',
        'quotaNicknameListShrink' => 'quotaNicknameList',
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
        if (null !== $this->jobOwnerListShrink) {
            $res['jobOwnerList'] = $this->jobOwnerListShrink;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->quotaNicknameListShrink) {
            $res['quotaNicknameList'] = $this->quotaNicknameListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobResourceUsageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['jobOwnerList'])) {
            $model->jobOwnerListShrink = $map['jobOwnerList'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['quotaNicknameList'])) {
            $model->quotaNicknameListShrink = $map['quotaNicknameList'];
        }

        return $model;
    }
}
