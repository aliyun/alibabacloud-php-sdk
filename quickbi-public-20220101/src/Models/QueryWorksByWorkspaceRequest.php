<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorksByWorkspaceRequest extends Model
{
    /**
     * @description The page number of the returned page.
     *
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the work. Valid values:
     *
     *   0: unpublished
     *   1: published
     *   2: modified but not published
     *   3: unpublished
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Third-party embedding status. Valid values:
     *
     *   0: The embed service is not enabled.
     *   1: Embed is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $thirdPartAuthFlag;

    /**
     * @description The type of the work. Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   FULLPAGE: full-screen dashboards
     *   REPORT: workbook
     *
     * @example PAGE
     *
     * @var string
     */
    public $worksType;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example 89713491-cb4f-4579-b889-e82c35f1****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
        'status'            => 'Status',
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'worksType'         => 'WorksType',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thirdPartAuthFlag) {
            $res['ThirdPartAuthFlag'] = $this->thirdPartAuthFlag;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorksByWorkspaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThirdPartAuthFlag'])) {
            $model->thirdPartAuthFlag = $map['ThirdPartAuthFlag'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
