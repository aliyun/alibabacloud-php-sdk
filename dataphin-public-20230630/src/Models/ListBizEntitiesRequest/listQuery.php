<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest\listQuery\filterCriteria;

class listQuery extends Model
{
    /**
     * @var filterCriteria
     */
    public $filterCriteria;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'filterCriteria' => 'FilterCriteria',
        'keyword' => 'Keyword',
        'page' => 'Page',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (null !== $this->filterCriteria) {
            $this->filterCriteria->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterCriteria) {
            $res['FilterCriteria'] = null !== $this->filterCriteria ? $this->filterCriteria->toArray($noStream) : $this->filterCriteria;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
