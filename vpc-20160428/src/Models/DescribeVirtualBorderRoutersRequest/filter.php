<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter conditions. You can specify up to five filter conditions. Valid values:
     *
     *   **PhysicalConnectionId**: Filter by Express Connect circuit ID.
     *   **VbrId**: Filter by VBR ID.
     *   **Status**: Filter by VBR status.
     *   **Name**: Filter by VBR name.
     *   **AccessPointId**: Filter by access point ID.
     *   **eccId:** Filter by Express Cloud Connect (ECC) instance ID.
     *   **type**: Filter by Express Connect circuit type.
     *
     * @example Status
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter values for keys. You can specify multiple filter values for one key. The logical operator between filter values is OR. If one filter value is matched, the filter condition is matched.
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
