<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCostUnitRequest extends Model
{
    /**
     * @description The user ID of the cost center owner.
     *
     * @example 28394563429587
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page. A maximum of 300 entries can be returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the parent cost center. A value of -1 indicates the root cost center.
     *
     * @example -1
     *
     * @var int
     */
    public $parentUnitId;
    protected $_name = [
        'ownerUid'     => 'OwnerUid',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'parentUnitId' => 'ParentUnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentUnitId) {
            $res['ParentUnitId'] = $this->parentUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCostUnitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentUnitId'])) {
            $model->parentUnitId = $map['ParentUnitId'];
        }

        return $model;
    }
}
