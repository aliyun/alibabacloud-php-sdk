<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest\listQuery\searchFilter;
use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @var searchFilter
     */
    public $searchFilter;
    protected $_name = [
        'keyword'      => 'Keyword',
        'searchFilter' => 'SearchFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->searchFilter) {
            $res['SearchFilter'] = null !== $this->searchFilter ? $this->searchFilter->toMap() : null;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['SearchFilter'])) {
            $model->searchFilter = searchFilter::fromMap($map['SearchFilter']);
        }

        return $model;
    }
}
