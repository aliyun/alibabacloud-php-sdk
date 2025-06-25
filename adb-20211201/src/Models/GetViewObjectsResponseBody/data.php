<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetViewObjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\TableSummaryModel;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var TableSummaryModel[]
     */
    public $tableSummaryModels;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tableSummaryModels' => 'TableSummaryModels',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tableSummaryModels)) {
            Model::validateArray($this->tableSummaryModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->tableSummaryModels) {
            if (\is_array($this->tableSummaryModels)) {
                $res['TableSummaryModels'] = [];
                $n1 = 0;
                foreach ($this->tableSummaryModels as $item1) {
                    $res['TableSummaryModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TableSummaryModels'])) {
            if (!empty($map['TableSummaryModels'])) {
                $model->tableSummaryModels = [];
                $n1 = 0;
                foreach ($map['TableSummaryModels'] as $item1) {
                    $model->tableSummaryModels[$n1] = TableSummaryModel::fromMap($item1);
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
