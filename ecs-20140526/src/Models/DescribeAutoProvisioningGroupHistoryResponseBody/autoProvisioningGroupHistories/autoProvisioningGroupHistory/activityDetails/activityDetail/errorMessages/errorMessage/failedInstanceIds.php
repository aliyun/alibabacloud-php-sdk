<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\errorMessages\errorMessage;

use AlibabaCloud\Dara\Model;

class failedInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $failedInstanceId;
    protected $_name = [
        'failedInstanceId' => 'FailedInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->failedInstanceId)) {
            Model::validateArray($this->failedInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedInstanceId) {
            if (\is_array($this->failedInstanceId)) {
                $res['FailedInstanceId'] = [];
                $n1 = 0;
                foreach ($this->failedInstanceId as $item1) {
                    $res['FailedInstanceId'][$n1] = $item1;
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
        if (isset($map['FailedInstanceId'])) {
            if (!empty($map['FailedInstanceId'])) {
                $model->failedInstanceId = [];
                $n1 = 0;
                foreach ($map['FailedInstanceId'] as $item1) {
                    $model->failedInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
