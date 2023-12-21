<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsResponseBody\calculationJobs;
use AlibabaCloud\Tea\Model;

class ListCalculationJobsResponseBody extends Model
{
    /**
     * @var calculationJobs[]
     */
    public $calculationJobs;

    /**
     * @example F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calculationJobs) {
            $res['CalculationJobs'] = [];
            if (null !== $this->calculationJobs && \is_array($this->calculationJobs)) {
                $n = 0;
                foreach ($this->calculationJobs as $item) {
                    $res['CalculationJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListCalculationJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalculationJobs'])) {
            if (!empty($map['CalculationJobs'])) {
                $model->calculationJobs = [];
                $n                      = 0;
                foreach ($map['CalculationJobs'] as $item) {
                    $model->calculationJobs[$n++] = null !== $item ? calculationJobs::fromMap($item) : $item;
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
