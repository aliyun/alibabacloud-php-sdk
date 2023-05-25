<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of the filter condition used to query resources. Valid values:
     *
     *   If you set this parameter to `CreationStartTime`, you can query the resources that were created after the point in time specified by the `Filter.N.Value` value.
     *   If you set this parameter to `CreationEndTime`, you can query the resources that were created before the point in time as specified by the `Filter.N.Value` value.
     *
     * @example CreationStartTime
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of filter N used to query resources. When you specify this parameter, you must also specify `Filter.N.Key`. Make sure the time is in the `yyyy-MM-ddTHH:mmZ` format and in UTC.
     *
     * @example 2017-12-05T22:40Z
     *
     * @var string
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
            $model->value = $map['Value'];
        }

        return $model;
    }
}
