<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponseBody\jobItems;
use AlibabaCloud\Tea\Model;

class ListStreamingJobsResponseBody extends Model
{
    /**
     * @description The queried jobs.
     *
     * @var jobItems[]
     */
    public $jobItems;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'jobItems'         => 'JobItems',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobItems) {
            $res['JobItems'] = [];
            if (null !== $this->jobItems && \is_array($this->jobItems)) {
                $n = 0;
                foreach ($this->jobItems as $item) {
                    $res['JobItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStreamingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobItems'])) {
            if (!empty($map['JobItems'])) {
                $model->jobItems = [];
                $n               = 0;
                foreach ($map['JobItems'] as $item) {
                    $model->jobItems[$n++] = null !== $item ? jobItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
