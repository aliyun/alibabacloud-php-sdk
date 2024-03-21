<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList\classificationSimilarityList;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var classificationSimilarityList[]
     */
    public $classificationSimilarityList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'classificationSimilarityList' => 'ClassificationSimilarityList',
        'name'                         => 'Name',
        'uri'                          => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationSimilarityList) {
            $res['ClassificationSimilarityList'] = [];
            if (null !== $this->classificationSimilarityList && \is_array($this->classificationSimilarityList)) {
                $n = 0;
                foreach ($this->classificationSimilarityList as $item) {
                    $res['ClassificationSimilarityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassificationSimilarityList'])) {
            if (!empty($map['ClassificationSimilarityList'])) {
                $model->classificationSimilarityList = [];
                $n                                   = 0;
                foreach ($map['ClassificationSimilarityList'] as $item) {
                    $model->classificationSimilarityList[$n++] = null !== $item ? classificationSimilarityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
