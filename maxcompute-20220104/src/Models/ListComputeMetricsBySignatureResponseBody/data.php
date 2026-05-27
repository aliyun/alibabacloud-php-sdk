<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsBySignatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsBySignatureResponseBody\data\signatureComputeMetrics;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var signatureComputeMetrics[]
     */
    public $signatureComputeMetrics;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'signatureComputeMetrics' => 'signatureComputeMetrics',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->signatureComputeMetrics)) {
            Model::validateArray($this->signatureComputeMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->signatureComputeMetrics) {
            if (\is_array($this->signatureComputeMetrics)) {
                $res['signatureComputeMetrics'] = [];
                $n1 = 0;
                foreach ($this->signatureComputeMetrics as $item1) {
                    $res['signatureComputeMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['signatureComputeMetrics'])) {
            if (!empty($map['signatureComputeMetrics'])) {
                $model->signatureComputeMetrics = [];
                $n1 = 0;
                foreach ($map['signatureComputeMetrics'] as $item1) {
                    $model->signatureComputeMetrics[$n1] = signatureComputeMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
