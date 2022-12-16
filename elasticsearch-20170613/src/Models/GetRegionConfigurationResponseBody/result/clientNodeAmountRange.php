<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class clientNodeAmountRange extends Model
{
    /**
     * @example 25
     *
     * @var int
     */
    public $maxAmount;

    /**
     * @example 2
     *
     * @var int
     */
    public $minAmount;
    protected $_name = [
        'maxAmount' => 'maxAmount',
        'minAmount' => 'minAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxAmount) {
            $res['maxAmount'] = $this->maxAmount;
        }
        if (null !== $this->minAmount) {
            $res['minAmount'] = $this->minAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientNodeAmountRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxAmount'])) {
            $model->maxAmount = $map['maxAmount'];
        }
        if (isset($map['minAmount'])) {
            $model->minAmount = $map['minAmount'];
        }

        return $model;
    }
}
