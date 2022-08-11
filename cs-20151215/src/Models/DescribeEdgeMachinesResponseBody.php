<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody\edgeMachines;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeEdgeMachinesResponseBody extends Model
{
    /**
     * @var edgeMachines[]
     */
    public $edgeMachines;

    /**
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'edgeMachines' => 'edge_machines',
        'pageInfo'     => 'page_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeMachines) {
            $res['edge_machines'] = [];
            if (null !== $this->edgeMachines && \is_array($this->edgeMachines)) {
                $n = 0;
                foreach ($this->edgeMachines as $item) {
                    $res['edge_machines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['edge_machines'])) {
            if (!empty($map['edge_machines'])) {
                $model->edgeMachines = [];
                $n                   = 0;
                foreach ($map['edge_machines'] as $item) {
                    $model->edgeMachines[$n++] = null !== $item ? edgeMachines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
