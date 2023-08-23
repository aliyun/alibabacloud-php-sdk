<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetRunningJobsRequest extends Model
{
    /**
     * @example 1683785928
     *
     * @var int
     */
    public $from;

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

    /**
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
