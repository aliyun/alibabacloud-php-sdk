<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNodesInstanceTypeResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $multiBufferEnabled;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key'                => 'Key',
        'multiBufferEnabled' => 'MultiBufferEnabled',
        'nodeType'           => 'NodeType',
        'value'              => 'Value',
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
        if (null !== $this->multiBufferEnabled) {
            $res['MultiBufferEnabled'] = $this->multiBufferEnabled;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MultiBufferEnabled'])) {
            $model->multiBufferEnabled = $map['MultiBufferEnabled'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
