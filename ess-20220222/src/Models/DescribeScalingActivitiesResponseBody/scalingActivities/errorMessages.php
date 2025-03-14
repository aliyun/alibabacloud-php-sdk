<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities;

use AlibabaCloud\Tea\Model;

class errorMessages extends Model
{
    /**
     * @description The error code that is returned when the scaling activity failed.
     *
     * @example OperationDenied.NoStock
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the scaling activity exception.
     *
     * @example Fail to create instances into scaling group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of the instances included in the failed scaling activities.
     *
     * @var string[]
     */
    public $failedInstanceIds;

    /**
     * @description The error message that is returned when the scaling activity failed or is partially successful.
     *
     * @example The resource is out of stock in the specified zone. Please try other types, or choose other regions and zones.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'failedInstanceIds' => 'FailedInstanceIds',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->failedInstanceIds) {
            $res['FailedInstanceIds'] = $this->failedInstanceIds;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FailedInstanceIds'])) {
            if (!empty($map['FailedInstanceIds'])) {
                $model->failedInstanceIds = $map['FailedInstanceIds'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
