<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterBasicInfoRequest extends Model
{
    /**
     * @description The ID of the cluster that you want to query.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example c870ec78ecbcb41d2a35c679823ef****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The dimension from which you want to configure the feature. Valid values:
     *
     *   **Cluster**: the ID of the cluster
     *
     * @example Cluster
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the feature. Valid values:
     *
     *   **containerNetwork**: container network topology
     *   **interceptionSwitch**: cluster microsegmentation
     *
     * @example containerNetwork
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'targetType' => 'TargetType',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterBasicInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
