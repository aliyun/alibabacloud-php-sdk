<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter;

class ListJobsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var jobFilter
     */
    public $jobFilter;
    /**
     * @var string
     */
    public $pageNumber;
    /**
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
        if (null !== $this->jobFilter) {
            $this->jobFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->jobFilter) {
            $res['JobFilter'] = null !== $this->jobFilter ? $this->jobFilter->toArray($noStream) : $this->jobFilter;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
