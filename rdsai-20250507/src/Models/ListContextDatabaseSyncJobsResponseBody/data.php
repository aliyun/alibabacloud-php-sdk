<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobsResponseBody\data\jobs;

class data extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'jobs' => 'Jobs',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['Jobs'] = [];
                $n1 = 0;
                foreach ($this->jobs as $item1) {
                    $res['Jobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n1 = 0;
                foreach ($map['Jobs'] as $item1) {
                    $model->jobs[$n1] = jobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
