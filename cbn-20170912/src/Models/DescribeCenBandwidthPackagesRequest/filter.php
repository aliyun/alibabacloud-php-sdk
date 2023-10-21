<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter conditions. You can use filter conditions to filter the bandwidth plans that you want to query. The following filter conditions are supported:
     *
     *   **CenId**: CEN instance ID
     *
     *   **Status**: bandwidth plan status. Valid values:
     *
     *   **Idle**: not associated with a CEN instance.
     *   **InUse**: associated with a CEN instance.
     *
     *   **CenBandwidthPackageId**: bandwidth plan ID
     *
     *   **Name**: bandwidth plan name You can specify one or more filter conditions. The maximum value of **N** is **5**.
     *
     * @example CenId
     *
     * @var string
     */
    public $key;

    /**
     * @description Specify a filter value based on the **Key** parameter. You can specify multiple filter values for each **Key**. The logical operator between filter values is **OR**. If one filter value is matched, the filter condition is matched.
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
