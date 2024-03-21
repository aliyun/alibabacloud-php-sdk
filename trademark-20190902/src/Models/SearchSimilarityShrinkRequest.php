<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityShrinkRequest\nameUriList;
use AlibabaCloud\Tea\Model;

class SearchSimilarityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $classificationsShrink;

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
     * @var string
     */
    public $similarGroupsShrink;

    /**
     * @var string
     */
    public $sorter;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'classificationsShrink' => 'Classifications',
        'limit'                 => 'Limit',
        'nameUriList'           => 'NameUriList',
        'searchType'            => 'SearchType',
        'showDetail'            => 'ShowDetail',
        'similarGroupsShrink'   => 'SimilarGroups',
        'sorter'                => 'Sorter',
        'umid'                  => 'Umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationsShrink) {
            $res['Classifications'] = $this->classificationsShrink;
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
        if (null !== $this->similarGroupsShrink) {
            $res['SimilarGroups'] = $this->similarGroupsShrink;
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
     * @return SearchSimilarityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classifications'])) {
            $model->classificationsShrink = $map['Classifications'];
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
            $model->similarGroupsShrink = $map['SimilarGroups'];
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
