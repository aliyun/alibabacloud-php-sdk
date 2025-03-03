<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetJobsResponseBody extends Model
{
    /**
     * @var DatasetJob[]
     */
    public $datasetJobs;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasetJobs' => 'DatasetJobs',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->datasetJobs)) {
            Model::validateArray($this->datasetJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetJobs) {
            if (\is_array($this->datasetJobs)) {
                $res['DatasetJobs'] = [];
                $n1                 = 0;
                foreach ($this->datasetJobs as $item1) {
                    $res['DatasetJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DatasetJobs'])) {
            if (!empty($map['DatasetJobs'])) {
                $model->datasetJobs = [];
                $n1                 = 0;
                foreach ($map['DatasetJobs'] as $item1) {
                    $model->datasetJobs[$n1++] = DatasetJob::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
