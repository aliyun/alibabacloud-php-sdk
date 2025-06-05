<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\environmentVars\valueFrom;

class environmentVars extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var valueFrom
     */
    public $valueFrom;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
        'valueFrom' => 'ValueFrom',
    ];

    public function validate()
    {
        if (null !== $this->valueFrom) {
            $this->valueFrom->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueFrom) {
            $res['ValueFrom'] = null !== $this->valueFrom ? $this->valueFrom->toArray($noStream) : $this->valueFrom;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueFrom'])) {
            $model->valueFrom = valueFrom::fromMap($map['ValueFrom']);
        }

        return $model;
    }
}
