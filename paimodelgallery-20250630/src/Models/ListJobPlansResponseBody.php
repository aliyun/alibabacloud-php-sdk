<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;

class ListJobPlansResponseBody extends Model
{
    /**
     * @var JobPlan[]
     */
    public $jobPlans;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobPlans' => 'JobPlans',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->jobPlans)) {
            Model::validateArray($this->jobPlans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobPlans) {
            if (\is_array($this->jobPlans)) {
                $res['JobPlans'] = [];
                $n1 = 0;
                foreach ($this->jobPlans as $item1) {
                    $res['JobPlans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['JobPlans'])) {
            if (!empty($map['JobPlans'])) {
                $model->jobPlans = [];
                $n1 = 0;
                foreach ($map['JobPlans'] as $item1) {
                    $model->jobPlans[$n1] = JobPlan::fromMap($item1);
                    ++$n1;
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
