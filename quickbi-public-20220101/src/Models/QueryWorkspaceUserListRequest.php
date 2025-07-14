<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorkspaceUserListRequest extends Model
{
    /**
     * @description Keyword for the username of the workspace member.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Current page number of the workspace member list:
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
     * @description Workspace ID.
     *
     * This parameter is required.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'workspaceId' => 'WorkspaceId',
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorkspaceUserListRequest
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
