<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListListsShrinkRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query arguments in the JSON format, which contain filter conditions.
     *
     * @example ListLists
     *
     * @var string
     */
    public $queryArgsShrink;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryArgsShrink' => 'QueryArgs',
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
        if (null !== $this->queryArgsShrink) {
            $res['QueryArgs'] = $this->queryArgsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListsShrinkRequest
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
            $model->queryArgsShrink = $map['QueryArgs'];
        }

        return $model;
    }
}
