<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterInfoListRequest extends Model
{
    /**
     * @description The operation value. The value specifies the ID of the cluster.
     *
     * @example c23551de6149343e8a54e69fbefe6****
     *
     * @var string
     */
    public $target;

    /**
     * @description The dimension based on which you want to configure the feature. Valid values:
     *
     *   **Cluster**: the ID of the cluster
     *
     * This parameter is required.
     * @example Cluster
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the feature. Valid values:
     *
     *   **containerNetwork**: container network
     *   **interceptionSwitch**: cluster microsegmentation
     *
     * This parameter is required.
     * @example containerNetwork
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'target'     => 'Target',
        'targetType' => 'TargetType',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
     * @return DescribeClusterInfoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
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
