<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The mitigation plan of the Anti-DDoS Origin instance.
     *
     * @example test-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The mitigation plan of the Anti-DDoS Origin instance. Valid values:
     *
     *   0: the Professional mitigation plan.
     *   1: the Enterprise mitigation plan.
     *
     * @example test-value
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
     * @return tag
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
