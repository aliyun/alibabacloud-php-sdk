<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobHistoryResponseBody\data\jobs;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'jobs' => 'Jobs',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

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

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

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

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
