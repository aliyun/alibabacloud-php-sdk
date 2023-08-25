<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetViewObjectsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\TableSummaryModel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number. Pages start from page 1. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30** (default)
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The queried views.
     *
     * @var TableSummaryModel[]
     */
    public $tableSummaryModels;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'tableSummaryModels' => 'TableSummaryModels',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tableSummaryModels) {
            $res['TableSummaryModels'] = [];
            if (null !== $this->tableSummaryModels && \is_array($this->tableSummaryModels)) {
                $n = 0;
                foreach ($this->tableSummaryModels as $item) {
                    $res['TableSummaryModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                         = 0;
                foreach ($map['TableSummaryModels'] as $item) {
                    $model->tableSummaryModels[$n++] = null !== $item ? TableSummaryModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
