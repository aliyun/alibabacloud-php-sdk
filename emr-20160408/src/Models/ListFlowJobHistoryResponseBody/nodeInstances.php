<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryResponseBody\nodeInstances\nodeInstance;
use AlibabaCloud\Tea\Model;

class nodeInstances extends Model
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
     * @return nodeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInstance'])) {
            if (!empty($map['NodeInstance'])) {
                $model->nodeInstance = [];
                $n                   = 0;
                foreach ($map['NodeInstance'] as $item) {
                    $model->nodeInstance[$n++] = null !== $item ? nodeInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
