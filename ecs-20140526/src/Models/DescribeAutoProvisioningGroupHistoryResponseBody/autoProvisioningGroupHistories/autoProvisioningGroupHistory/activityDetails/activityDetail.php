<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;

use AlibabaCloud\Tea\Model;

class activityDetail extends Model
{
    /**
     * @description The execution details of instance creation performed by the single scheduling task.
     *
     * @example New ECS instances "i-bp67acfmxazb4p****, i-bp67acfmxazb5p****" created.
     *
     * @var string
     */
    public $detail;

    /**
     * @description The execution status of instance creation performed by the single scheduling task. Valid values:
     *
     *   Successful: Instances are created.
     *   Failed: Instances failed to be created.
     *   InProgress: Instances are being created.
     *   Warning: Some instances are created.
     *
     * @example Successful
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'detail' => 'Detail',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
