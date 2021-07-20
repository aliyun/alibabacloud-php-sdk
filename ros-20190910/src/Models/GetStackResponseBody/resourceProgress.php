<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress\inProgressResourceDetails;
use AlibabaCloud\Tea\Model;

class resourceProgress extends Model
{
    /**
     * @var int
     */
    public $totalResourceCount;

    /**
     * @var int
     */
    public $successResourceCount;

    /**
     * @var int
     */
    public $failedResourceCount;

    /**
     * @var int
     */
    public $inProgressResourceCount;

    /**
     * @var int
     */
    public $pendingResourceCount;

    /**
     * @var inProgressResourceDetails[]
     */
    public $inProgressResourceDetails;
    protected $_name = [
        'totalResourceCount'        => 'TotalResourceCount',
        'successResourceCount'      => 'SuccessResourceCount',
        'failedResourceCount'       => 'FailedResourceCount',
        'inProgressResourceCount'   => 'InProgressResourceCount',
        'pendingResourceCount'      => 'PendingResourceCount',
        'inProgressResourceDetails' => 'InProgressResourceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
        }
        if (null !== $this->successResourceCount) {
            $res['SuccessResourceCount'] = $this->successResourceCount;
        }
        if (null !== $this->failedResourceCount) {
            $res['FailedResourceCount'] = $this->failedResourceCount;
        }
        if (null !== $this->inProgressResourceCount) {
            $res['InProgressResourceCount'] = $this->inProgressResourceCount;
        }
        if (null !== $this->pendingResourceCount) {
            $res['PendingResourceCount'] = $this->pendingResourceCount;
        }
        if (null !== $this->inProgressResourceDetails) {
            $res['InProgressResourceDetails'] = [];
            if (null !== $this->inProgressResourceDetails && \is_array($this->inProgressResourceDetails)) {
                $n = 0;
                foreach ($this->inProgressResourceDetails as $item) {
                    $res['InProgressResourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalResourceCount'])) {
            $model->totalResourceCount = $map['TotalResourceCount'];
        }
        if (isset($map['SuccessResourceCount'])) {
            $model->successResourceCount = $map['SuccessResourceCount'];
        }
        if (isset($map['FailedResourceCount'])) {
            $model->failedResourceCount = $map['FailedResourceCount'];
        }
        if (isset($map['InProgressResourceCount'])) {
            $model->inProgressResourceCount = $map['InProgressResourceCount'];
        }
        if (isset($map['PendingResourceCount'])) {
            $model->pendingResourceCount = $map['PendingResourceCount'];
        }
        if (isset($map['InProgressResourceDetails'])) {
            if (!empty($map['InProgressResourceDetails'])) {
                $model->inProgressResourceDetails = [];
                $n                                = 0;
                foreach ($map['InProgressResourceDetails'] as $item) {
                    $model->inProgressResourceDetails[$n++] = null !== $item ? inProgressResourceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
