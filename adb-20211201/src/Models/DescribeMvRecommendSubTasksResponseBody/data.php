<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeMvRecommendSubTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\OpenStructMvRecommendSubTaskModel;

class data extends Model
{
    /**
     * @var OpenStructMvRecommendSubTaskModel[]
     */
    public $mvRecommendSubTaskModels;

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
        'mvRecommendSubTaskModels' => 'MvRecommendSubTaskModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->mvRecommendSubTaskModels)) {
            Model::validateArray($this->mvRecommendSubTaskModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mvRecommendSubTaskModels) {
            if (\is_array($this->mvRecommendSubTaskModels)) {
                $res['MvRecommendSubTaskModels'] = [];
                $n1 = 0;
                foreach ($this->mvRecommendSubTaskModels as $item1) {
                    $res['MvRecommendSubTaskModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MvRecommendSubTaskModels'])) {
            if (!empty($map['MvRecommendSubTaskModels'])) {
                $model->mvRecommendSubTaskModels = [];
                $n1 = 0;
                foreach ($map['MvRecommendSubTaskModels'] as $item1) {
                    $model->mvRecommendSubTaskModels[$n1] = OpenStructMvRecommendSubTaskModel::fromMap($item1);
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
