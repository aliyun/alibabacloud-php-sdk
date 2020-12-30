<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\nodeInstance\nodeInstance;
use AlibabaCloud\Tea\Model;

class nodeInstance extends Model
{
    /**
     * @var nodeInstance[]
     */
    public $nodeInstance;
    protected $_name = [
        'nodeInstance' => 'NodeInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInstance) {
            $res['NodeInstance'] = [];
            if (null !== $this->nodeInstance && \is_array($this->nodeInstance)) {
                $n = 0;
                foreach ($this->nodeInstance as $item) {
                    $res['NodeInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInstance'])) {
            if (!empty($map['NodeInstance'])) {
                $model->nodeInstance = [];
                $n                   = 0;
                foreach ($map['NodeInstance'] as $item) {
                    $model->nodeInstance[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
