<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorksByOrganizationRequest extends Model
{
    /**
     * @description Page number.
     *
     * - Default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Number of items per page.
     *
     * - Default value is 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the work to query. Possible values:
     *
     * - 0: Unpublished
     * - 1: Published
     * - 2: Modified but not published
     * - 3: Offline
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Third-party embedding status. Possible values:
     *
     * - 0: Embedding not enabled
     * - 1: Embedding enabled
     *
     * @example 1
     *
     * @var int
     */
    public $thirdPartAuthFlag;

    /**
     * @description The type of work to query. Leave blank to query all types. Possible values:
     *
     * - DATAPRODUCT: Data Portal
     * - PAGE: Dashboard
     * - REPORT: Spreadsheet
     * - dashboardOfflineQuery: Self-service Data Retrieval
     *
     * @example PAGE
     *
     * @var string
     */
    public $worksType;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'worksType' => 'WorksType',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorksByOrganizationRequest
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

        return $model;
    }
}
