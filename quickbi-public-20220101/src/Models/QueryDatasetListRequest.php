<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDatasetListRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example schemaad8aad00-9c55-4984-a767-b4e0ec60****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description Information about the directory where the dataset is located
     *
     * @example Queries the datasets of a specified workspace. The datasets are sorted in descending order by creation time.
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The ID of the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Specifies the directory ID.
     *
     *   If this field is not empty, all datasets in the directory are obtained.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of pages returned.
     *
     * @example true
     *
     * @var bool
     */
    public $withChildren;

    /**
     * @description The name of the data source.
     *
     * This parameter is required.
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'directoryId'  => 'DirectoryId',
        'keyword'      => 'Keyword',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'withChildren' => 'WithChildren',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->withChildren) {
            $res['WithChildren'] = $this->withChildren;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatasetListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['WithChildren'])) {
            $model->withChildren = $map['WithChildren'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
