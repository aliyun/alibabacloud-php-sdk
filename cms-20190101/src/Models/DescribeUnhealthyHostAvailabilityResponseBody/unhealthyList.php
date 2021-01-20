<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList\nodeTaskInstance;
use AlibabaCloud\Tea\Model;

class unhealthyList extends Model
{
    /**
     * @var nodeTaskInstance[]
     */
    public $nodeTaskInstance;
    protected $_name = [
        'nodeTaskInstance' => 'NodeTaskInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTaskInstance) {
            $res['NodeTaskInstance'] = [];
            if (null !== $this->nodeTaskInstance && \is_array($this->nodeTaskInstance)) {
                $n = 0;
                foreach ($this->nodeTaskInstance as $item) {
                    $res['NodeTaskInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unhealthyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTaskInstance'])) {
            if (!empty($map['NodeTaskInstance'])) {
                $model->nodeTaskInstance = [];
                $n                       = 0;
                foreach ($map['NodeTaskInstance'] as $item) {
                    $model->nodeTaskInstance[$n++] = null !== $item ? nodeTaskInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
