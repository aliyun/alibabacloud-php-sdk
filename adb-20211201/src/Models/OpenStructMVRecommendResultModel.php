<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructMVRecommendResultModel extends Model
{
    /**
     * @var int
     */
    public $acceleratedQueriesCount;

    /**
     * @var OpenStructMvBaseTableDetailModel[]
     */
    public $baseTables;

    /**
     * @var int
     */
    public $savedScanbytes;

    /**
     * @var string
     */
    public $subquery;

    /**
     * @var int
     */
    public $subqueryId;

    /**
     * @var bool
     */
    public $supportIncrementalRefresh;
    protected $_name = [
        'acceleratedQueriesCount' => 'AcceleratedQueriesCount',
        'baseTables' => 'BaseTables',
        'savedScanbytes' => 'SavedScanbytes',
        'subquery' => 'Subquery',
        'subqueryId' => 'SubqueryId',
        'supportIncrementalRefresh' => 'SupportIncrementalRefresh',
    ];

    public function validate()
    {
        if (\is_array($this->baseTables)) {
            Model::validateArray($this->baseTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratedQueriesCount) {
            $res['AcceleratedQueriesCount'] = $this->acceleratedQueriesCount;
        }

        if (null !== $this->baseTables) {
            if (\is_array($this->baseTables)) {
                $res['BaseTables'] = [];
                $n1 = 0;
                foreach ($this->baseTables as $item1) {
                    $res['BaseTables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->savedScanbytes) {
            $res['SavedScanbytes'] = $this->savedScanbytes;
        }

        if (null !== $this->subquery) {
            $res['Subquery'] = $this->subquery;
        }

        if (null !== $this->subqueryId) {
            $res['SubqueryId'] = $this->subqueryId;
        }

        if (null !== $this->supportIncrementalRefresh) {
            $res['SupportIncrementalRefresh'] = $this->supportIncrementalRefresh;
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
        if (isset($map['AcceleratedQueriesCount'])) {
            $model->acceleratedQueriesCount = $map['AcceleratedQueriesCount'];
        }

        if (isset($map['BaseTables'])) {
            if (!empty($map['BaseTables'])) {
                $model->baseTables = [];
                $n1 = 0;
                foreach ($map['BaseTables'] as $item1) {
                    $model->baseTables[$n1++] = OpenStructMvBaseTableDetailModel::fromMap($item1);
                }
            }
        }

        if (isset($map['SavedScanbytes'])) {
            $model->savedScanbytes = $map['SavedScanbytes'];
        }

        if (isset($map['Subquery'])) {
            $model->subquery = $map['Subquery'];
        }

        if (isset($map['SubqueryId'])) {
            $model->subqueryId = $map['SubqueryId'];
        }

        if (isset($map['SupportIncrementalRefresh'])) {
            $model->supportIncrementalRefresh = $map['SupportIncrementalRefresh'];
        }

        return $model;
    }
}
