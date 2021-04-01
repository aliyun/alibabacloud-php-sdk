<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config;

use AlibabaCloud\Tea\Model;

class payloadLen extends Model
{
    /**
     * @var int
     */
    public $min;

    /**
     * @var int
     */
    public $max;
    protected $_name = [
        'min' => 'Min',
        'max' => 'Max',
    ];

    public function validate()
    {
        Model::validateRequired('min', $this->min, true);
        Model::validateRequired('max', $this->max, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payloadLen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        return $model;
    }
}
