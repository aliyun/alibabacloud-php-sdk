<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\PipelineFindAllResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PipelineFindAllResponseBody\pageable\sort;
use AlibabaCloud\Tea\Model;

class pageable extends Model
{
    /**
     * @var int
     */
    public $offset;

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
    public $paged;

    /**
     * @var sort
     */
    public $sort;

    /**
     * @var bool
     */
    public $unpaged;
    protected $_name = [
        'offset'     => 'Offset',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'paged'      => 'Paged',
        'sort'       => 'Sort',
        'unpaged'    => 'Unpaged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paged) {
            $res['Paged'] = $this->paged;
        }
        if (null !== $this->sort) {
            $res['Sort'] = null !== $this->sort ? $this->sort->toMap() : null;
        }
        if (null !== $this->unpaged) {
            $res['Unpaged'] = $this->unpaged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Paged'])) {
            $model->paged = $map['Paged'];
        }
        if (isset($map['Sort'])) {
            $model->sort = sort::fromMap($map['Sort']);
        }
        if (isset($map['Unpaged'])) {
            $model->unpaged = $map['Unpaged'];
        }

        return $model;
    }
}
