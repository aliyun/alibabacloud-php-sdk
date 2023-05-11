<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListRecentViewReportsRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @example 10
     *
     * @var int
     */
    public $offsetDay;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $queryMode;

    /**
     * @example PAGE
     *
     * @var string
     */
    public $treeType;

    /**
     * @example b5d8fd9348cc4327****afb604
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'keyword'   => 'Keyword',
        'offsetDay' => 'OffsetDay',
        'pageSize'  => 'PageSize',
        'queryMode' => 'QueryMode',
        'treeType'  => 'TreeType',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

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
