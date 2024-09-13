<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSDGRequest extends Model
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
     * @var string[]
     */
    public $SDGIds;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'SDGIds'     => 'SDGIds',
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
        if (null !== $this->SDGIds) {
            $res['SDGIds'] = $this->SDGIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDGRequest
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
            if (!empty($map['SDGIds'])) {
                $model->SDGIds = $map['SDGIds'];
            }
        }

        return $model;
    }
}
