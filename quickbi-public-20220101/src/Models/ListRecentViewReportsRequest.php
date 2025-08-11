<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListRecentViewReportsRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $offsetDay;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var string
     */
    public $treeType;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
