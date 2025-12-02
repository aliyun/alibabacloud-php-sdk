<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeMvRecommendTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\OpenStructMvRecommendTaskModel;

class data extends Model
{
    /**
     * @var OpenStructMvRecommendTaskModel[]
     */
    public $mvRecommendTaskModels;

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
        'mvRecommendTaskModels' => 'MvRecommendTaskModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->mvRecommendTaskModels)) {
            Model::validateArray($this->mvRecommendTaskModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mvRecommendTaskModels) {
            if (\is_array($this->mvRecommendTaskModels)) {
                $res['MvRecommendTaskModels'] = [];
                $n1 = 0;
                foreach ($this->mvRecommendTaskModels as $item1) {
                    $res['MvRecommendTaskModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MvRecommendTaskModels'])) {
            if (!empty($map['MvRecommendTaskModels'])) {
                $model->mvRecommendTaskModels = [];
                $n1 = 0;
                foreach ($map['MvRecommendTaskModels'] as $item1) {
                    $model->mvRecommendTaskModels[$n1] = OpenStructMvRecommendTaskModel::fromMap($item1);
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
