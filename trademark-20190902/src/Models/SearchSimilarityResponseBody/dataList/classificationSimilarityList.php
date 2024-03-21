<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList\classificationSimilarityList\similarGroupList;
use AlibabaCloud\Tea\Model;

class classificationSimilarityList extends Model
{
    /**
     * @var int
     */
    public $classification;

    /**
     * @var string
     */
    public $classificationName;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var similarGroupList[]
     */
    public $similarGroupList;
    protected $_name = [
        'classification'     => 'Classification',
        'classificationName' => 'ClassificationName',
        'rate'               => 'Rate',
        'similarGroupList'   => 'SimilarGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->classificationName) {
            $res['ClassificationName'] = $this->classificationName;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->similarGroupList) {
            $res['SimilarGroupList'] = [];
            if (null !== $this->similarGroupList && \is_array($this->similarGroupList)) {
                $n = 0;
                foreach ($this->similarGroupList as $item) {
                    $res['SimilarGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classificationSimilarityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['ClassificationName'])) {
            $model->classificationName = $map['ClassificationName'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['SimilarGroupList'])) {
            if (!empty($map['SimilarGroupList'])) {
                $model->similarGroupList = [];
                $n                       = 0;
                foreach ($map['SimilarGroupList'] as $item) {
                    $model->similarGroupList[$n++] = null !== $item ? similarGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
