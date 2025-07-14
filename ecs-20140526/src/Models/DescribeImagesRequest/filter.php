<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of filter N used to query resources. Valid values:
     *
     *   If you set this parameter to `CreationStartTime`, you can query the resources that were created after the point in time specified by `Filter.N.Value`.
     *   If you set this parameter to `CreationEndTime`, you can query the resources that were created before the point in time specified by `Filter.N.Value`.
     *   If you set this parameter to `NetworkType`, you can query resources of the specified network type.
     *
     * @example CreationStartTime
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of filter N used to query resources. Valid values:
     *
     *   When `Filter.N.Key` is set to `CreationStartTime` or `CreationEndTime`, the format is `yyyy-MM-ddTHH:mmZ` in the UTC+0 time zone.
     *   When `Filter.N.Key` is set to `NetworkType`, the valid values can be `vpc` or `classic`.
     *
     * @example 2017-12-05T22:40Z
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

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
