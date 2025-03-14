<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataServiceListRequest extends Model
{
    /**
     * @description Data service name.
     *
     * @example 测试sql
     *
     * @var string
     */
    public $name;

    /**
     * @description Page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Number of items per page in a paginated query:
     *
     * - Default value: 10
     * - Maximum value: 1000
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description User ID.
     *
     * @example dasdfdsa-csddf-dsadsa
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'name' => 'Name',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataServiceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
