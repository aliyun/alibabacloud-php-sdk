<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListFavoriteReportsRequest extends Model
{
    /**
     * @description Keyword of the work name.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Number of rows in the work list to be queried:
     * Default value: 10
     * Maximum value: 9999
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Type of the work to be queried (leave blank to query all types). Value range:
     * - DATAPRODUCT: Data Portal
     * - PAGE: Dashboard
     * - REPORT: Spreadsheet
     *
     * @example PAGE
     *
     * @var string
     */
    public $treeType;

    /**
     * @description The UserID of the user in Quick BI to be queried.
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
        'pageSize' => 'PageSize',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListFavoriteReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
