<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter keys. You can specify at most five filter keys. Valid values of **N**: **1 to 5**.
     *
     * The following filter keys are supported:
     *
     *   **VpcId**: virtual private cloud (VPC) ID
     *   **VSwitchId**: vSwitch ID
     *   **Status**: HAVIP status
     *   **HaVipId**: HAVIP ID
     *   **HaVipAddress**: HAVIP IP address
     *
     * The logical operator among multiple filter keys is AND. HAVIPs can be queried only if all filter keys are matched.
     * @example HaVipId
     *
     * @var string
     */
    public $key;

    /**
     * @example havip-bp19o63nequs01i8d****
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
