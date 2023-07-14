<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The key of the filter condition. You must set the key to `pid` or `regionId`.
     *
     * @example pid
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter condition. You must set the value of the `pid` or `regionId` condition. For information about how to obtain the `pid`, see the "Obtain the PID of an application" section.
     *
     * @example xxx@74xxx
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
     * @return filters
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
