<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter;
use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-csbua72***
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The job filter information.
     *
     * @var jobFilter
     */
    public $jobFilter;

    /**
     * @description The page number of the page to return.
     *
     *   Pages start from page 1.
     *   Default value: 1
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 50.
     *   Default value: 10
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'jobFilter'  => 'JobFilter',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobFilter) {
            $res['JobFilter'] = null !== $this->jobFilter ? $this->jobFilter->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobFilter'])) {
            $model->jobFilter = jobFilter::fromMap($map['JobFilter']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
