<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerCriteriaRequest extends Model
{
    /**
     * @description The filter condition. Valid values:
     *
     *   **pod**: pod
     *   **appName**: application name
     *   **clusterId**: cluster ID
     *   **namespace**: namespace
     *   **image**: image
     *   **containerScan**: container scan
     *
     * @example clusterId
     *
     * @var string
     */
    public $groupField;

    /**
     * @description The value of the filter condition. The value can be an application name, node name, namespace, cluster name, public IP address, pod address, region, pod, instance ID, cluster ID, or container ID. Fuzzy match is supported.
     *
     * @example cfb41a869c71e4678a97021582dd8a****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'groupField' => 'GroupField',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
