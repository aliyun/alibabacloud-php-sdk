<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptResponseBody;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptResponseBody\dataResult\jobAttemptList;
use AlibabaCloud\Tea\Model;

class dataResult extends Model
{
    /**
     * @var jobAttemptList[]
     */
    public $jobAttemptList;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'jobAttemptList' => 'JobAttemptList',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobAttemptList) {
            $res['JobAttemptList'] = [];
            if (null !== $this->jobAttemptList && \is_array($this->jobAttemptList)) {
                $n = 0;
                foreach ($this->jobAttemptList as $item) {
                    $res['JobAttemptList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return dataResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobAttemptList'])) {
            if (!empty($map['JobAttemptList'])) {
                $model->jobAttemptList = [];
                $n                     = 0;
                foreach ($map['JobAttemptList'] as $item) {
                    $model->jobAttemptList[$n++] = null !== $item ? jobAttemptList::fromMap($item) : $item;
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
