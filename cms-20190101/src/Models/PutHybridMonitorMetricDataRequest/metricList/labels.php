<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest\metricList;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The tag key of the metric.
     *
     * Valid values of N: 1 to 100.
     *
     * The key can contain letters, digits, and underscores (*). The key must start with a letter or an underscore (*).
     *
     * >  You must specify both the Key and Value parameters.
     * @example IP
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the metric.
     *
     * >  You must specify both the Key and Value parameters.
     * @example 192.168.XX.XX
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
