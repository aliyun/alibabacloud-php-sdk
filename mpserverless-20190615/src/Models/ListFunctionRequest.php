<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionRequest extends Model
{
    /**
     * @example demo
     *
     * @var string
     */
    public $filterBy;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example dece4ea0-d432-4cfa-****-8a88d205e2b8
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'filterBy' => 'FilterBy',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'spaceId'  => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterBy) {
            $res['FilterBy'] = $this->filterBy;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterBy'])) {
            $model->filterBy = $map['FilterBy'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
