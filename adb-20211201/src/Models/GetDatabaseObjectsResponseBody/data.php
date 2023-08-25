<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DatabaseSummaryModel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The queried database.
     *
     * @var DatabaseSummaryModel[]
     */
    public $databaseSummaryModels;

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
     *   30
     *   50
     *   100
     *
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'databaseSummaryModels' => 'DatabaseSummaryModels',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseSummaryModels) {
            $res['DatabaseSummaryModels'] = [];
            if (null !== $this->databaseSummaryModels && \is_array($this->databaseSummaryModels)) {
                $n = 0;
                foreach ($this->databaseSummaryModels as $item) {
                    $res['DatabaseSummaryModels'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseSummaryModels'])) {
            if (!empty($map['DatabaseSummaryModels'])) {
                $model->databaseSummaryModels = [];
                $n                            = 0;
                foreach ($map['DatabaseSummaryModels'] as $item) {
                    $model->databaseSummaryModels[$n++] = null !== $item ? DatabaseSummaryModel::fromMap($item) : $item;
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
