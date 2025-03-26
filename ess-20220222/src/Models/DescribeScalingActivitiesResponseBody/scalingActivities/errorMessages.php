<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities;

use AlibabaCloud\Dara\Model;

class errorMessages extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $failedInstanceIds;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'failedInstanceIds' => 'FailedInstanceIds',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (\is_array($this->failedInstanceIds)) {
            Model::validateArray($this->failedInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->failedInstanceIds) {
            if (\is_array($this->failedInstanceIds)) {
                $res['FailedInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->failedInstanceIds as $item1) {
                    $res['FailedInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FailedInstanceIds'])) {
            if (!empty($map['FailedInstanceIds'])) {
                $model->failedInstanceIds = [];
                $n1 = 0;
                foreach ($map['FailedInstanceIds'] as $item1) {
                    $model->failedInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
