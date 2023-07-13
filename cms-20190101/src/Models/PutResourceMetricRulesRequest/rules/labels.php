<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The interval at which the alert rule is executed.
     *
     * >  For information about how to query the statistical period of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example tagKey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The subject of the alert notification email.
     *
     * Valid values of N: 1 to 500.
     * @example ECS
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
     * @return labels
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
