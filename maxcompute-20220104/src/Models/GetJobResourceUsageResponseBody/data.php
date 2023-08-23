<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody\data\jobResourceUsageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var jobResourceUsageList[]
     */
    public $jobResourceUsageList;

    /**
     * @example 2
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
     * @example 64
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobResourceUsageList' => 'jobResourceUsageList',
        'pageNumber'           => 'pageNumber',
        'pageSize'             => 'pageSize',
        'totalCount'           => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobResourceUsageList) {
            $res['jobResourceUsageList'] = [];
            if (null !== $this->jobResourceUsageList && \is_array($this->jobResourceUsageList)) {
                $n = 0;
                foreach ($this->jobResourceUsageList as $item) {
                    $res['jobResourceUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['jobResourceUsageList'])) {
            if (!empty($map['jobResourceUsageList'])) {
                $model->jobResourceUsageList = [];
                $n                           = 0;
                foreach ($map['jobResourceUsageList'] as $item) {
                    $model->jobResourceUsageList[$n++] = null !== $item ? jobResourceUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
