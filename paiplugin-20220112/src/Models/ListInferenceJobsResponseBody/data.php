<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListInferenceJobsResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListInferenceJobsResponseBody\data\inferenceJobs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var inferenceJobs[]
     */
    public $inferenceJobs;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inferenceJobs' => 'InferenceJobs',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inferenceJobs) {
            $res['InferenceJobs'] = [];
            if (null !== $this->inferenceJobs && \is_array($this->inferenceJobs)) {
                $n = 0;
                foreach ($this->inferenceJobs as $item) {
                    $res['InferenceJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InferenceJobs'])) {
            if (!empty($map['InferenceJobs'])) {
                $model->inferenceJobs = [];
                $n                    = 0;
                foreach ($map['InferenceJobs'] as $item) {
                    $model->inferenceJobs[$n++] = null !== $item ? inferenceJobs::fromMap($item) : $item;
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
