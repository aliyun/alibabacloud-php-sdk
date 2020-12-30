<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNodesResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNodesResponseBody\uisNodeList\uisNode;
use AlibabaCloud\Tea\Model;

class uisNodeList extends Model
{
    /**
     * @var uisNode[]
     */
    public $uisNode;
    protected $_name = [
        'uisNode' => 'UisNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisNode) {
            $res['UisNode'] = [];
            if (null !== $this->uisNode && \is_array($this->uisNode)) {
                $n = 0;
                foreach ($this->uisNode as $item) {
                    $res['UisNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisNodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisNode'])) {
            if (!empty($map['UisNode'])) {
                $model->uisNode = [];
                $n              = 0;
                foreach ($map['UisNode'] as $item) {
                    $model->uisNode[$n++] = null !== $item ? uisNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
