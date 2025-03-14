<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryApprovalInfoRequest extends Model
{
    /**
     * @description Page number, default is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description Number of rows per page, default is 1000.
     *
     * @example 1000
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Approval status:
     * - 0: Pending
     * - 1: Processed
     *
     * This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Current approver user ID, qbi user ID.
     *
     * This parameter is required.
     *
     * @example 12352fasdavsa
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryApprovalInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
