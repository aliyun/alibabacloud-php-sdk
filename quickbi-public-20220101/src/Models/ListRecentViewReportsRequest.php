<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListRecentViewReportsRequest extends Model
{
    /**
     * @description Keyword of the name of the work.
     *
     * @example Financial Statements
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of days to query data in the last few days. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $offsetDay;

    /**
     * @description Query the number of rows in the work list:
     *
     *   Default value: 10.
     *   Maximum value: 9999
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query mode. Valid values:
     *
     *   1: Sort by number of visits
     *   2: Sort by Last Access Time
     *
     * @example 1
     *
     * @var string
     */
    public $queryMode;

    /**
     * @description Query the type of the work (fill in the blank to query all types). Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   REPORT: workbook
     *
     * @example PAGE
     *
     * @var string
     */
    public $treeType;

    /**
     * @description The UserID of the user in the Quick BI.
     *
     * This parameter is required.
     *
     * @example b5d8fd9348cc4327****afb604
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'keyword' => 'Keyword',
        'offsetDay' => 'OffsetDay',
        'pageSize' => 'PageSize',
        'queryMode' => 'QueryMode',
        'treeType' => 'TreeType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->offsetDay) {
            $res['OffsetDay'] = $this->offsetDay;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }
        if (null !== $this->treeType) {
            $res['TreeType'] = $this->treeType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecentViewReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OffsetDay'])) {
            $model->offsetDay = $map['OffsetDay'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }
        if (isset($map['TreeType'])) {
            $model->treeType = $map['TreeType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
