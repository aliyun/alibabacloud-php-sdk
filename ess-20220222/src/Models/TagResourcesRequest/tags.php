<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @example false
     *
     * @var bool
     */
    public $propagate;

    /**
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'       => 'Key',
        'propagate' => 'Propagate',
        'value'     => 'Value',
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
        if (null !== $this->propagate) {
            $res['Propagate'] = $this->propagate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Propagate'])) {
            $model->propagate = $map['Propagate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
