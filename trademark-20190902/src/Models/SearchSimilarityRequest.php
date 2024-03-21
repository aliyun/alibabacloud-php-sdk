<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityRequest\nameUriList;
use AlibabaCloud\Tea\Model;

class SearchSimilarityRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $classifications;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var nameUriList[]
     */
    public $nameUriList;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var bool
     */
    public $showDetail;

    /**
     * @var mixed[]
     */
    public $similarGroups;

    /**
     * @var string
     */
    public $sorter;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'classifications' => 'Classifications',
        'limit'           => 'Limit',
        'nameUriList'     => 'NameUriList',
        'searchType'      => 'SearchType',
        'showDetail'      => 'ShowDetail',
        'similarGroups'   => 'SimilarGroups',
        'sorter'          => 'Sorter',
        'umid'            => 'Umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classifications) {
            $res['Classifications'] = $this->classifications;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nameUriList) {
            $res['NameUriList'] = [];
            if (null !== $this->nameUriList && \is_array($this->nameUriList)) {
                $n = 0;
                foreach ($this->nameUriList as $item) {
                    $res['NameUriList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->showDetail) {
            $res['ShowDetail'] = $this->showDetail;
        }
        if (null !== $this->similarGroups) {
            $res['SimilarGroups'] = $this->similarGroups;
        }
        if (null !== $this->sorter) {
            $res['Sorter'] = $this->sorter;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchSimilarityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classifications'])) {
            $model->classifications = $map['Classifications'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NameUriList'])) {
            if (!empty($map['NameUriList'])) {
                $model->nameUriList = [];
                $n                  = 0;
                foreach ($map['NameUriList'] as $item) {
                    $model->nameUriList[$n++] = null !== $item ? nameUriList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['ShowDetail'])) {
            $model->showDetail = $map['ShowDetail'];
        }
        if (isset($map['SimilarGroups'])) {
            $model->similarGroups = $map['SimilarGroups'];
        }
        if (isset($map['Sorter'])) {
            $model->sorter = $map['Sorter'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }

        return $model;
    }
}
