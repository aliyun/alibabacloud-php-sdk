<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryOrganizationWorkspaceListRequest extends Model
{
    /**
     * @description Keyword for the workspace name.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Current page number of the workspace list:
     *
     * - Starting value: 1
     * - Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Number of rows per page in a paginated query:
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
     * @description User ID in Quick BI.
     *
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
     * @return QueryOrganizationWorkspaceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
