<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\createdInstanceIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\destroyedInstanceIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\errorMessages;

class activityDetail extends Model
{
    /**
     * @var createdInstanceIds
     */
    public $createdInstanceIds;

    /**
     * @var destroyedInstanceIds
     */
    public $destroyedInstanceIds;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var errorMessages
     */
    public $errorMessages;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createdInstanceIds' => 'CreatedInstanceIds',
        'destroyedInstanceIds' => 'DestroyedInstanceIds',
        'detail' => 'Detail',
        'errorMessages' => 'ErrorMessages',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->createdInstanceIds) {
            $this->createdInstanceIds->validate();
        }
        if (null !== $this->destroyedInstanceIds) {
            $this->destroyedInstanceIds->validate();
        }
        if (null !== $this->errorMessages) {
            $this->errorMessages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdInstanceIds) {
            $res['CreatedInstanceIds'] = null !== $this->createdInstanceIds ? $this->createdInstanceIds->toArray($noStream) : $this->createdInstanceIds;
        }

        if (null !== $this->destroyedInstanceIds) {
            $res['DestroyedInstanceIds'] = null !== $this->destroyedInstanceIds ? $this->destroyedInstanceIds->toArray($noStream) : $this->destroyedInstanceIds;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->errorMessages) {
            $res['ErrorMessages'] = null !== $this->errorMessages ? $this->errorMessages->toArray($noStream) : $this->errorMessages;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreatedInstanceIds'])) {
            $model->createdInstanceIds = createdInstanceIds::fromMap($map['CreatedInstanceIds']);
        }

        if (isset($map['DestroyedInstanceIds'])) {
            $model->destroyedInstanceIds = destroyedInstanceIds::fromMap($map['DestroyedInstanceIds']);
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['ErrorMessages'])) {
            $model->errorMessages = errorMessages::fromMap($map['ErrorMessages']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
