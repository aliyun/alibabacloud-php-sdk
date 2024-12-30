<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest\listQuery\filterCriteria;
use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @var filterCriteria
     */
    public $filterCriteria;

    /**
     * @example object_
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'filterCriteria' => 'FilterCriteria',
        'keyword'        => 'Keyword',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterCriteria) {
            $res['FilterCriteria'] = null !== $this->filterCriteria ? $this->filterCriteria->toMap() : null;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterCriteria'])) {
            $model->filterCriteria = filterCriteria::fromMap($map['FilterCriteria']);
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
