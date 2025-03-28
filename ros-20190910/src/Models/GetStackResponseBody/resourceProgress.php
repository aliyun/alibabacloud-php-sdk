<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress\inProgressResourceDetails;

class resourceProgress extends Model
{
    /**
     * @var int
     */
    public $failedResourceCount;

    /**
     * @var int
     */
    public $inProgressResourceCount;

    /**
     * @var inProgressResourceDetails[]
     */
    public $inProgressResourceDetails;

    /**
     * @var int
     */
    public $pendingResourceCount;

    /**
     * @var float
     */
    public $stackActionProgress;

    /**
     * @var float
     */
    public $stackOperationProgress;

    /**
     * @var int
     */
    public $successResourceCount;

    /**
     * @var int
     */
    public $totalResourceCount;
    protected $_name = [
        'failedResourceCount' => 'FailedResourceCount',
        'inProgressResourceCount' => 'InProgressResourceCount',
        'inProgressResourceDetails' => 'InProgressResourceDetails',
        'pendingResourceCount' => 'PendingResourceCount',
        'stackActionProgress' => 'StackActionProgress',
        'stackOperationProgress' => 'StackOperationProgress',
        'successResourceCount' => 'SuccessResourceCount',
        'totalResourceCount' => 'TotalResourceCount',
    ];

    public function validate()
    {
        if (\is_array($this->inProgressResourceDetails)) {
            Model::validateArray($this->inProgressResourceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResourceCount) {
            $res['FailedResourceCount'] = $this->failedResourceCount;
        }

        if (null !== $this->inProgressResourceCount) {
            $res['InProgressResourceCount'] = $this->inProgressResourceCount;
        }

        if (null !== $this->inProgressResourceDetails) {
            if (\is_array($this->inProgressResourceDetails)) {
                $res['InProgressResourceDetails'] = [];
                $n1 = 0;
                foreach ($this->inProgressResourceDetails as $item1) {
                    $res['InProgressResourceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pendingResourceCount) {
            $res['PendingResourceCount'] = $this->pendingResourceCount;
        }

        if (null !== $this->stackActionProgress) {
            $res['StackActionProgress'] = $this->stackActionProgress;
        }

        if (null !== $this->stackOperationProgress) {
            $res['StackOperationProgress'] = $this->stackOperationProgress;
        }

        if (null !== $this->successResourceCount) {
            $res['SuccessResourceCount'] = $this->successResourceCount;
        }

        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
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
        if (isset($map['FailedResourceCount'])) {
            $model->failedResourceCount = $map['FailedResourceCount'];
        }

        if (isset($map['InProgressResourceCount'])) {
            $model->inProgressResourceCount = $map['InProgressResourceCount'];
        }

        if (isset($map['InProgressResourceDetails'])) {
            if (!empty($map['InProgressResourceDetails'])) {
                $model->inProgressResourceDetails = [];
                $n1 = 0;
                foreach ($map['InProgressResourceDetails'] as $item1) {
                    $model->inProgressResourceDetails[$n1++] = inProgressResourceDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['PendingResourceCount'])) {
            $model->pendingResourceCount = $map['PendingResourceCount'];
        }

        if (isset($map['StackActionProgress'])) {
            $model->stackActionProgress = $map['StackActionProgress'];
        }

        if (isset($map['StackOperationProgress'])) {
            $model->stackOperationProgress = $map['StackOperationProgress'];
        }

        if (isset($map['SuccessResourceCount'])) {
            $model->successResourceCount = $map['SuccessResourceCount'];
        }

        if (isset($map['TotalResourceCount'])) {
            $model->totalResourceCount = $map['TotalResourceCount'];
        }

        return $model;
    }
}
