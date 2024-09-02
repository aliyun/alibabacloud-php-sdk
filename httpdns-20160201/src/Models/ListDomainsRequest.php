<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Tea\Model;

class ListDomainsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $search;

    /**
     * @var bool
     */
    public $withoutMeteringData;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'search'              => 'Search',
        'withoutMeteringData' => 'WithoutMeteringData',
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
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->withoutMeteringData) {
            $res['WithoutMeteringData'] = $this->withoutMeteringData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsRequest
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
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['WithoutMeteringData'])) {
            $model->withoutMeteringData = $map['WithoutMeteringData'];
        }

        return $model;
    }
}
