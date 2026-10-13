<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunsResponseBody\data\runs;

class data extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var runs[]
     */
    public $runs;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'runs' => 'Runs',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->runs)) {
            Model::validateArray($this->runs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->runs) {
            if (\is_array($this->runs)) {
                $res['Runs'] = [];
                $n1 = 0;
                foreach ($this->runs as $item1) {
                    $res['Runs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n1 = 0;
                foreach ($map['Runs'] as $item1) {
                    $model->runs[$n1] = runs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
