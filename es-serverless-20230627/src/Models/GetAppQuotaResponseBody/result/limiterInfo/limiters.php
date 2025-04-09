<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result\limiterInfo;

use AlibabaCloud\Dara\Model;

class limiters extends Model
{
    /**
     * @var bool
     */
    public $immutable;

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
    protected $_name = [
        'immutable' => 'immutable',
        'maxValue' => 'maxValue',
        'minValue' => 'minValue',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->immutable) {
            $res['immutable'] = $this->immutable;
        }

        if (null !== $this->maxValue) {
            $res['maxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['minValue'] = $this->minValue;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['immutable'])) {
            $model->immutable = $map['immutable'];
        }

        if (isset($map['maxValue'])) {
            $model->maxValue = $map['maxValue'];
        }

        if (isset($map['minValue'])) {
            $model->minValue = $map['minValue'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
