<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\limiterInfo;

use AlibabaCloud\Tea\Model;

class limiters extends Model
{
    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'maxValue' => 'maxValue',
        'minValue' => 'minValue',
        'type'     => 'type',
        'values'   => 'values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['maxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['minValue'] = $this->minValue;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limiters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxValue'])) {
            $model->maxValue = $map['maxValue'];
        }
        if (isset($map['minValue'])) {
            $model->minValue = $map['minValue'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}
