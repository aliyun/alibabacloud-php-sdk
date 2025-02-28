<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsResponseBody\calculationJobs;

class ListCalculationJobsResponseBody extends Model
{
    /**
     * @var calculationJobs[]
     */
    public $calculationJobs;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'calculationJobs' => 'CalculationJobs',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->calculationJobs)) {
            Model::validateArray($this->calculationJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calculationJobs) {
            if (\is_array($this->calculationJobs)) {
                $res['CalculationJobs'] = [];
                $n1                     = 0;
                foreach ($this->calculationJobs as $item1) {
                    $res['CalculationJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CalculationJobs'])) {
            if (!empty($map['CalculationJobs'])) {
                $model->calculationJobs = [];
                $n1                     = 0;
                foreach ($map['CalculationJobs'] as $item1) {
                    $model->calculationJobs[$n1++] = calculationJobs::fromMap($item1);
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
