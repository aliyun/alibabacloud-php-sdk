<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter conditions. You can specify at most five filter conditions. The following filter conditions are supported:
     *
     *   **PhysicalConnectionId**: filter VBRs by the Express Connect circuit ID.
     *   **VbrId**: filter VBRs by ID.
     *   **Status**: filter VBRs by status.
     *   **Name**: filter VBRs by name.
     *   **AccessPointId**: filter VBRs by access point ID.
     *   **eccId**: filter VBRs by ID of Express Cloud Connect (ECC) instance.
     *   **type**: filter VBRs by type.
     *
     * @example Status
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value for the key. You can specify multiple filter values for one key. The logical operator among filter values is OR. If one filter value is matched, the filter condition is matched.
     *
     * @example Active
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
