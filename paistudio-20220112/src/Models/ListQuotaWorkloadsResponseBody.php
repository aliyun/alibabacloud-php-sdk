<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListQuotaWorkloadsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var QueueInfo[]
     */
    public $workloads;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'workloads' => 'Workloads',
    ];

    public function validate()
    {
        if (\is_array($this->workloads)) {
            Model::validateArray($this->workloads);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workloads) {
            if (\is_array($this->workloads)) {
                $res['Workloads'] = [];
                $n1 = 0;
                foreach ($this->workloads as $item1) {
                    $res['Workloads'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Workloads'])) {
            if (!empty($map['Workloads'])) {
                $model->workloads = [];
                $n1 = 0;
                foreach ($map['Workloads'] as $item1) {
                    $model->workloads[$n1] = QueueInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
