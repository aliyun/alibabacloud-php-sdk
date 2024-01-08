<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data\jobInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of the information about the jobs.
     *
     * @var jobInfoList[]
     */
    public $jobInfoList;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 64
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobInfoList' => 'jobInfoList',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'totalCount'  => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfoList) {
            $res['jobInfoList'] = [];
            if (null !== $this->jobInfoList && \is_array($this->jobInfoList)) {
                $n = 0;
                foreach ($this->jobInfoList as $item) {
                    $res['jobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['jobInfoList'])) {
            if (!empty($map['jobInfoList'])) {
                $model->jobInfoList = [];
                $n                  = 0;
                foreach ($map['jobInfoList'] as $item) {
                    $model->jobInfoList[$n++] = null !== $item ? jobInfoList::fromMap($item) : $item;
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
