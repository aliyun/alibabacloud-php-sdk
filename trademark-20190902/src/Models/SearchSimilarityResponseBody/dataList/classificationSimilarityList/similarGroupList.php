<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList\classificationSimilarityList;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchSimilarityResponseBody\dataList\classificationSimilarityList\similarGroupList\detailList;
use AlibabaCloud\Tea\Model;

class similarGroupList extends Model
{
    /**
     * @var detailList[]
     */
    public $detailList;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var string
     */
    public $similarGroup;

    /**
     * @var string
     */
    public $similarGroupName;
    protected $_name = [
        'detailList'       => 'DetailList',
        'rate'             => 'Rate',
        'similarGroup'     => 'SimilarGroup',
        'similarGroupName' => 'SimilarGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailList) {
            $res['DetailList'] = [];
            if (null !== $this->detailList && \is_array($this->detailList)) {
                $n = 0;
                foreach ($this->detailList as $item) {
                    $res['DetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->similarGroup) {
            $res['SimilarGroup'] = $this->similarGroup;
        }
        if (null !== $this->similarGroupName) {
            $res['SimilarGroupName'] = $this->similarGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailList'])) {
            if (!empty($map['DetailList'])) {
                $model->detailList = [];
                $n                 = 0;
                foreach ($map['DetailList'] as $item) {
                    $model->detailList[$n++] = null !== $item ? detailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['SimilarGroup'])) {
            $model->similarGroup = $map['SimilarGroup'];
        }
        if (isset($map['SimilarGroupName'])) {
            $model->similarGroupName = $map['SimilarGroupName'];
        }

        return $model;
    }
}
