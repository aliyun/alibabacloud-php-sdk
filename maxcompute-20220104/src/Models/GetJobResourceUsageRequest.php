<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetJobResourceUsageRequest extends Model
{
    /**
     * @example 2023-05-15
     *
     * @var string
     */
    public $date;

    /**
     * @var string[]
     */
    public $jobOwnerList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
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
