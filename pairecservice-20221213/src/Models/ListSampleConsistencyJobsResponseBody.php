<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSampleConsistencyJobsResponseBody\sampleConsistencyJobs;

class ListSampleConsistencyJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sampleConsistencyJobs[]
     */
    public $sampleConsistencyJobs;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'sampleConsistencyJobs' => 'SampleConsistencyJobs',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sampleConsistencyJobs)) {
            Model::validateArray($this->sampleConsistencyJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleConsistencyJobs) {
            if (\is_array($this->sampleConsistencyJobs)) {
                $res['SampleConsistencyJobs'] = [];
                $n1 = 0;
                foreach ($this->sampleConsistencyJobs as $item1) {
                    $res['SampleConsistencyJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleConsistencyJobs'])) {
            if (!empty($map['SampleConsistencyJobs'])) {
                $model->sampleConsistencyJobs = [];
                $n1 = 0;
                foreach ($map['SampleConsistencyJobs'] as $item1) {
                    $model->sampleConsistencyJobs[$n1++] = sampleConsistencyJobs::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
