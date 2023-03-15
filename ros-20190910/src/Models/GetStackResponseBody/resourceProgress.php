<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress\inProgressResourceDetails;
use AlibabaCloud\Tea\Model;

class resourceProgress extends Model
{
    /**
     * @description The number of resources that fail to be created.
     *
     * @example 0
     *
     * @var int
     */
    public $failedResourceCount;

    /**
     * @description The number of resources that are being created.
     *
     * @example 1
     *
     * @var int
     */
    public $inProgressResourceCount;

    /**
     * @description The progress details of resources that are being created.
     *
     * @var inProgressResourceDetails[]
     */
    public $inProgressResourceDetails;

    /**
     * @description The number of resources to be created.
     *
     * @example 0
     *
     * @var int
     */
    public $pendingResourceCount;

    /**
     * @description The number of resources that are created.
     *
     * @example 1
     *
     * @var int
     */
    public $successResourceCount;

    /**
     * @description The total number of resources.
     *
     * @example 2
     *
     * @var int
     */
    public $totalResourceCount;
    protected $_name = [
        'failedResourceCount'       => 'FailedResourceCount',
        'inProgressResourceCount'   => 'InProgressResourceCount',
        'inProgressResourceDetails' => 'InProgressResourceDetails',
        'pendingResourceCount'      => 'PendingResourceCount',
        'successResourceCount'      => 'SuccessResourceCount',
        'totalResourceCount'        => 'TotalResourceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResourceCount) {
            $res['FailedResourceCount'] = $this->failedResourceCount;
        }
        if (null !== $this->inProgressResourceCount) {
            $res['InProgressResourceCount'] = $this->inProgressResourceCount;
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
        if (null !== $this->pendingResourceCount) {
            $res['PendingResourceCount'] = $this->pendingResourceCount;
        }
        if (null !== $this->successResourceCount) {
            $res['SuccessResourceCount'] = $this->successResourceCount;
        }
        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
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
        if (isset($map['FailedResourceCount'])) {
            $model->failedResourceCount = $map['FailedResourceCount'];
        }
        if (isset($map['InProgressResourceCount'])) {
            $model->inProgressResourceCount = $map['InProgressResourceCount'];
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
        if (isset($map['PendingResourceCount'])) {
            $model->pendingResourceCount = $map['PendingResourceCount'];
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
