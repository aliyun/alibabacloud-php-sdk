<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of the filter. Valid values:
     *
     *   **CenId**: the ID of a CEN instance.
     *   **Name**: the name of a CEN instance.
     *
     * By default, the logical operator among filter conditions is **AND**. Information about a CEN instance is returned only if the CEN instance matches all filter conditions.
     *
     * You can specify at most five filter conditions in each call.
     * @example CenId
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter condition.
     *
     * Specify a filter value based on the **Key** parameter. You can specify multiple values for a filter **key**. The logical operator among multiple filter values is **OR**. If a CEN instance matches one or more of the values that you specify, the CEN instance matches the filter condition.
     *
     * You can specify at most five values in each filter condition.
     * @example cen-0xyeagctz5sfg9****
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
