<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeMVRecommendResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\OpenStructMVRecommendResultModel;

class data extends Model
{
    /**
     * @var OpenStructMVRecommendResultModel[]
     */
    public $mvRecommendResultModels;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'mvRecommendResultModels' => 'MvRecommendResultModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->mvRecommendResultModels)) {
            Model::validateArray($this->mvRecommendResultModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mvRecommendResultModels) {
            if (\is_array($this->mvRecommendResultModels)) {
                $res['MvRecommendResultModels'] = [];
                $n1 = 0;
                foreach ($this->mvRecommendResultModels as $item1) {
                    $res['MvRecommendResultModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['MvRecommendResultModels'])) {
            if (!empty($map['MvRecommendResultModels'])) {
                $model->mvRecommendResultModels = [];
                $n1 = 0;
                foreach ($map['MvRecommendResultModels'] as $item1) {
                    $model->mvRecommendResultModels[$n1] = OpenStructMVRecommendResultModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
