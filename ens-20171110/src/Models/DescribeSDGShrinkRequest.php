<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSDGShrinkRequest extends Model
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
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of SDGs that you want to query. By default, all SDGs are queried.
     *
     * @var string
     */
    public $SDGIdsShrink;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'SDGIdsShrink' => 'SDGIds',
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
        if (null !== $this->SDGIdsShrink) {
            $res['SDGIds'] = $this->SDGIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDGShrinkRequest
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
        if (isset($map['SDGIds'])) {
            $model->SDGIdsShrink = $map['SDGIds'];
        }

        return $model;
    }
}
