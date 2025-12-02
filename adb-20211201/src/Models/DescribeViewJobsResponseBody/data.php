<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeViewJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\OpenStructRefreshJobModel;

class data extends Model
{
    /**
     * @var OpenStructRefreshJobModel[]
     */
    public $mvRefreshJobModels;

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
        'mvRefreshJobModels' => 'MvRefreshJobModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->mvRefreshJobModels)) {
            Model::validateArray($this->mvRefreshJobModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mvRefreshJobModels) {
            if (\is_array($this->mvRefreshJobModels)) {
                $res['MvRefreshJobModels'] = [];
                $n1 = 0;
                foreach ($this->mvRefreshJobModels as $item1) {
                    $res['MvRefreshJobModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MvRefreshJobModels'])) {
            if (!empty($map['MvRefreshJobModels'])) {
                $model->mvRefreshJobModels = [];
                $n1 = 0;
                foreach ($map['MvRefreshJobModels'] as $item1) {
                    $model->mvRefreshJobModels[$n1] = OpenStructRefreshJobModel::fromMap($item1);
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
