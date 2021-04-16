<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class PaginateProjectRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $countTotalNum;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $nameLike;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'countTotalNum' => 'CountTotalNum',
        'type'          => 'Type',
        'nameLike'      => 'NameLike',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->countTotalNum) {
            $res['CountTotalNum'] = $this->countTotalNum;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaginateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CountTotalNum'])) {
            $model->countTotalNum = $map['CountTotalNum'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }

        return $model;
    }
}
