<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @example device
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @example eth0
     *
     * @var string
     */
    public $dimensionValue;
    protected $_name = [
        'dimensionKey'   => 'DimensionKey',
        'dimensionValue' => 'DimensionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }

        return $model;
    }
}
