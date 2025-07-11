<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest\filter;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The field name. This operation supports all fields. For details, see the **Supported field names** section below.
     *
     * @example matched_host
     *
     * @var string
     */
    public $key;

    /**
     * @description The operator. For details, see the **Supported operators** section below.
     *
     * @example eq
     *
     * @var string
     */
    public $opValue;

    /**
     * @description The field content.
     *
     * @example test.waf-top
     *
     * @var mixed
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'opValue' => 'OpValue',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->opValue) {
            $res['OpValue'] = $this->opValue;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OpValue'])) {
            $model->opValue = $map['OpValue'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
