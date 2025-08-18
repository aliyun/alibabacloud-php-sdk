<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchText;

    /**
     * @var string
     */
    public $tabType;
    protected $_name = [
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'searchText' => 'SearchText',
        'tabType' => 'TabType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        if (null !== $this->tabType) {
            $res['TabType'] = $this->tabType;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        if (isset($map['TabType'])) {
            $model->tabType = $map['TabType'];
        }

        return $model;
    }
}
