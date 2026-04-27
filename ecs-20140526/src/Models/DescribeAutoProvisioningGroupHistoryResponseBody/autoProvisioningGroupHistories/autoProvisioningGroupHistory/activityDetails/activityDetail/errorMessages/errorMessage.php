<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\errorMessages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\errorMessages\errorMessage\failedInstanceIds;

class errorMessage extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var failedInstanceIds
     */
    public $failedInstanceIds;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'failedInstanceIds' => 'FailedInstanceIds',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (null !== $this->failedInstanceIds) {
            $this->failedInstanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->failedInstanceIds) {
            $res['FailedInstanceIds'] = null !== $this->failedInstanceIds ? $this->failedInstanceIds->toArray($noStream) : $this->failedInstanceIds;
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

        if (isset($map['FailedInstanceIds'])) {
            $model->failedInstanceIds = failedInstanceIds::fromMap($map['FailedInstanceIds']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
