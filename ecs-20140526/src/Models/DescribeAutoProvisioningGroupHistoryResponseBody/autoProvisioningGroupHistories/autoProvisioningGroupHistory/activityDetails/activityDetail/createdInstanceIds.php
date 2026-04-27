<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail;

use AlibabaCloud\Dara\Model;

class createdInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $createdInstanceId;
    protected $_name = [
        'createdInstanceId' => 'CreatedInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->createdInstanceId)) {
            Model::validateArray($this->createdInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdInstanceId) {
            if (\is_array($this->createdInstanceId)) {
                $res['CreatedInstanceId'] = [];
                $n1 = 0;
                foreach ($this->createdInstanceId as $item1) {
                    $res['CreatedInstanceId'][$n1] = $item1;
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
        if (isset($map['CreatedInstanceId'])) {
            if (!empty($map['CreatedInstanceId'])) {
                $model->createdInstanceId = [];
                $n1 = 0;
                foreach ($map['CreatedInstanceId'] as $item1) {
                    $model->createdInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
