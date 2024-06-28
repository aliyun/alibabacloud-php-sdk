<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCostUnitResourceRequest extends Model
{
    /**
     * @description The user ID of the cost center owner.
     *
     * This parameter is required.
     * @example 23453245
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the cost center.
     *
     * This parameter is required.
     * @example 235325
     *
     * @var int
     */
    public $unitId;
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'unitId'   => 'UnitId',
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
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCostUnitResourceRequest
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
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }

        return $model;
    }
}
