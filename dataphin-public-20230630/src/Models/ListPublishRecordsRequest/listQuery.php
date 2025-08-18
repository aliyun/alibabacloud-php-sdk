<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest\listQuery\searchFilter;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var searchFilter
     */
    public $searchFilter;
    protected $_name = [
        'keyword' => 'Keyword',
        'searchFilter' => 'SearchFilter',
    ];

    public function validate()
    {
        if (null !== $this->searchFilter) {
            $this->searchFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->searchFilter) {
            $res['SearchFilter'] = null !== $this->searchFilter ? $this->searchFilter->toArray($noStream) : $this->searchFilter;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['SearchFilter'])) {
            $model->searchFilter = searchFilter::fromMap($map['SearchFilter']);
        }

        return $model;
    }
}
