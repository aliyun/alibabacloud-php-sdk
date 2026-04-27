<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail\errorMessages\errorMessage;

class errorMessages extends Model
{
    /**
     * @var errorMessage[]
     */
    public $errorMessage;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
        if (\is_array($this->errorMessage)) {
            Model::validateArray($this->errorMessage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            if (\is_array($this->errorMessage)) {
                $res['ErrorMessage'] = [];
                $n1 = 0;
                foreach ($this->errorMessage as $item1) {
                    $res['ErrorMessage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErrorMessage'])) {
            if (!empty($map['ErrorMessage'])) {
                $model->errorMessage = [];
                $n1 = 0;
                foreach ($map['ErrorMessage'] as $item1) {
                    $model->errorMessage[$n1] = errorMessage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
