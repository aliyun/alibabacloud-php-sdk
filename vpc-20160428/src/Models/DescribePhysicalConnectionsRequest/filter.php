<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of the filter. Valid values:
     *
     *   **PhysicalConnectionId**: the ID of the Express Connect circuit.
     *
     *   **AccessPointId**: the ID of the access point.
     *
     *   **Type**: the type of the Express Connect circuit. You can set Type only to **VPC**.
     *
     *   **LineOperator**: the connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom.
     *   **CU**: China Unicom.
     *   **CM**: China Mobile.
     *   **CO**: other connectivity providers in the Chinese mainland.
     *   **Equinix**: Equinix.
     *   **Other**: other connectivity providers outside the Chinese mainland.
     *
     *   **Spec**: the specification of the Express Connect circuit. Valid values:
     *
     *   **1G and below**
     *
     *   **10G**
     *
     *   **40G**
     *
     *   **100G**
     *
     * > By default, you cannot set Spec to **40G** or **100G**. To query 40 Gbit/s or 100 Gbit/s Express Connect circuits, you must first submit an application to acquire the permissions.
     *
     *   **Status**: the status of the Express Connect circuit. Valid values:
     *
     *   **Initial**: The application is under review.
     *   **Approved**: The application is approved.
     *   **Allocating**: The system is allocating resources.
     *   **Allocated**: The Express Connect circuit is under construction.
     *   **Confirmed**: The Express Connect circuit is pending user confirmation.
     *   **Enabled**: The Express Connect circuit is enabled.
     *   **Rejected**: The application is rejected.
     *   **Canceled**: The application is canceled.
     *   **Allocation Failed**: The system failed to allocate resources.
     *   **Terminating**: The Express Connect circuit is being disabled.
     *   **Terminated**: The Express Connect circuit is disabled.
     *
     *   **Name**: the name of the Express Connect circuit.
     *
     * You can specify at most five filter conditions in each call. The logical relation among the filter conditions is **AND**. Therefore, an Express Connect circuit is returned only when all specified filter conditions are matched.
     * @example Name
     *
     * @var string
     */
    public $key;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
