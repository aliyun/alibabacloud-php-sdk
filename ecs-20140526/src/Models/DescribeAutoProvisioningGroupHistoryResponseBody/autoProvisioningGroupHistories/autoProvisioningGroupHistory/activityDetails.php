<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails\activityDetail;

class activityDetails extends Model
{
    /**
     * @var activityDetail[]
     */
    public $activityDetail;
    protected $_name = [
        'activityDetail' => 'ActivityDetail',
    ];

    public function validate()
    {
        if (\is_array($this->activityDetail)) {
            Model::validateArray($this->activityDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityDetail) {
            if (\is_array($this->activityDetail)) {
                $res['ActivityDetail'] = [];
                $n1 = 0;
                foreach ($this->activityDetail as $item1) {
                    $res['ActivityDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ActivityDetail'])) {
            if (!empty($map['ActivityDetail'])) {
                $model->activityDetail = [];
                $n1 = 0;
                foreach ($map['ActivityDetail'] as $item1) {
                    $model->activityDetail[$n1++] = activityDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
