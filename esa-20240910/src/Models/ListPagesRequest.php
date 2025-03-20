<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesRequest\queryArgs;
use AlibabaCloud\Tea\Model;

class ListPagesRequest extends Model
{
    /**
     * @description The page number. Valid values: **1 to 100000**. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var queryArgs
     */
    public $queryArgs;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryArgs' => 'QueryArgs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPagesRequest
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
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
        }

        return $model;
    }
}
