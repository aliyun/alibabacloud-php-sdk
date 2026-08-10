<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SearchKgBySemanticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SearchKgBySemanticResponseBody\data\searchResults;

class data extends Model
{
    /**
     * @var searchResults[]
     */
    public $searchResults;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'searchResults' => 'SearchResults',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->searchResults)) {
            Model::validateArray($this->searchResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchResults) {
            if (\is_array($this->searchResults)) {
                $res['SearchResults'] = [];
                $n1 = 0;
                foreach ($this->searchResults as $item1) {
                    $res['SearchResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['SearchResults'])) {
            if (!empty($map['SearchResults'])) {
                $model->searchResults = [];
                $n1 = 0;
                foreach ($map['SearchResults'] as $item1) {
                    $model->searchResults[$n1] = searchResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
