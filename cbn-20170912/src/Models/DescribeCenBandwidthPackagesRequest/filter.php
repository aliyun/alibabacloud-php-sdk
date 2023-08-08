<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeCenBandwidthPackages**.
     *
     * @example CenId
     *
     * @var string
     */
    public $key;

    /**
     * @description The status of the bandwidth plan. Valid values:
     *
     *   **Normal**: normal
     *   **FinancialLocked**: locked due to overdue payments
     *   **SecurityLocked**: locked due to security reasons
     *
     * @example Idle
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
