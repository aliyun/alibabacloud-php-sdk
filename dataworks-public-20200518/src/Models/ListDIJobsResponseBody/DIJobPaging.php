<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIJobsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIJobsResponseBody\DIJobPaging\DIJobs;
use AlibabaCloud\Tea\Model;

class DIJobPaging extends Model
{
    /**
     * @var DIJobs[]
     */
    public $DIJobs;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 6
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DIJobs'     => 'DIJobs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobs) {
            $res['DIJobs'] = [];
            if (null !== $this->DIJobs && \is_array($this->DIJobs)) {
                $n = 0;
                foreach ($this->DIJobs as $item) {
                    $res['DIJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DIJobPaging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobs'])) {
            if (!empty($map['DIJobs'])) {
                $model->DIJobs = [];
                $n             = 0;
                foreach ($map['DIJobs'] as $item) {
                    $model->DIJobs[$n++] = null !== $item ? DIJobs::fromMap($item) : $item;
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
