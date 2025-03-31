<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DatabaseSummaryModel;

class data extends Model
{
    /**
     * @var DatabaseSummaryModel[]
     */
    public $databaseSummaryModels;

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
        'databaseSummaryModels' => 'DatabaseSummaryModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->databaseSummaryModels)) {
            Model::validateArray($this->databaseSummaryModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseSummaryModels) {
            if (\is_array($this->databaseSummaryModels)) {
                $res['DatabaseSummaryModels'] = [];
                $n1 = 0;
                foreach ($this->databaseSummaryModels as $item1) {
                    $res['DatabaseSummaryModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DatabaseSummaryModels'])) {
            if (!empty($map['DatabaseSummaryModels'])) {
                $model->databaseSummaryModels = [];
                $n1 = 0;
                foreach ($map['DatabaseSummaryModels'] as $item1) {
                    $model->databaseSummaryModels[$n1++] = DatabaseSummaryModel::fromMap($item1);
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
