<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result\limiterInfo;

use AlibabaCloud\Tea\Model;

class limiters extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $immutable;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $minValue;

    /**
     * @example INDEX_NUMBER_OF_SHARDS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'immutable' => 'immutable',
        'maxValue'  => 'maxValue',
        'minValue'  => 'minValue',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return limiters
     */
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
