<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNodesInstanceTypeResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var bool
     */
    public $multiBufferEnabled;

    /**
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'multiBufferEnabled' => 'MultiBufferEnabled',
        'nodeType'           => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiBufferEnabled) {
            $res['MultiBufferEnabled'] = $this->multiBufferEnabled;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (isset($map['MultiBufferEnabled'])) {
            $model->multiBufferEnabled = $map['MultiBufferEnabled'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
