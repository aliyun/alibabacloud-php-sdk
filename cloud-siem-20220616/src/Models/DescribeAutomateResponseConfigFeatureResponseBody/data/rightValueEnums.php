<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data;

use AlibabaCloud\Tea\Model;

class rightValueEnums extends Model
{
    /**
     * @example serious
     *
     * @var string
     */
    public $value;

    /**
     * @example aliyun.siem.automate.feature.alert_level.serious
     *
     * @var string
     */
    public $valueMds;
    protected $_name = [
        'value'    => 'Value',
        'valueMds' => 'ValueMds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueMds) {
            $res['ValueMds'] = $this->valueMds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rightValueEnums
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueMds'])) {
            $model->valueMds = $map['ValueMds'];
        }

        return $model;
    }
}
