<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail;

use AlibabaCloud\Dara\Model;

class destroyedInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $destroyedInstanceId;
    protected $_name = [
        'destroyedInstanceId' => 'DestroyedInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->destroyedInstanceId)) {
            Model::validateArray($this->destroyedInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destroyedInstanceId) {
            if (\is_array($this->destroyedInstanceId)) {
                $res['DestroyedInstanceId'] = [];
                $n1 = 0;
                foreach ($this->destroyedInstanceId as $item1) {
                    $res['DestroyedInstanceId'][$n1] = $item1;
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
        if (isset($map['DestroyedInstanceId'])) {
            if (!empty($map['DestroyedInstanceId'])) {
                $model->destroyedInstanceId = [];
                $n1 = 0;
                foreach ($map['DestroyedInstanceId'] as $item1) {
                    $model->destroyedInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
