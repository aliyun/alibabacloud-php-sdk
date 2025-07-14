<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListApiDatasourceRequest extends Model
{
    /**
     * @description The keyword of the API data source name.
     *
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description Current page number for API data source list:
     *
     *   Pages start from page 1.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of rows per page in a paged query.
     *
     *   Default value: 10.
     *   Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     *
     * @example 89713491-cb4f-4579-b889-e82c35f1****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keyWord' => 'KeyWord',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
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
     * @return ListApiDatasourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
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
