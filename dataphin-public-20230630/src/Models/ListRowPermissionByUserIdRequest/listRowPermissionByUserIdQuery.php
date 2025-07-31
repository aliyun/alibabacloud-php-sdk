<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdRequest;

use AlibabaCloud\Tea\Model;

class listRowPermissionByUserIdQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30008888
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'operator' => 'Operator',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listRowPermissionByUserIdQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
