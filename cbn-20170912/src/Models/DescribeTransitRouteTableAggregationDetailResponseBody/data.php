<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouteTableAggregationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error message returned if the configuration of the aggregate route fails.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the virtual private cloud (VPC) for which the aggregate route is configured.
     *
     * @example vpc-6eh7fp9hdqa2wv85t****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the aggregate route. Valid values:
     *
     *   **Configured**: The aggregate route is advertised to the VPC.
     *   **Configuring**: The aggregate route is being advertised.
     *   **ConfigFailed**: The aggregate route failed to be advertised.
     *   **PartialConfigured**: Failed to advertise the aggregate route to some VPCs.
     *   **Deleting**: The aggregate route is being deleted.
     *
     * @example Configured
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
