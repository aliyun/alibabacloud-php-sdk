<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody\edgeMachines;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody\pageInfo;

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
        if (\is_array($this->edgeMachines)) {
            Model::validateArray($this->edgeMachines);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeMachines) {
            if (\is_array($this->edgeMachines)) {
                $res['edge_machines'] = [];
                $n1                   = 0;
                foreach ($this->edgeMachines as $item1) {
                    $res['edge_machines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['edge_machines'])) {
            if (!empty($map['edge_machines'])) {
                $model->edgeMachines = [];
                $n1                  = 0;
                foreach ($map['edge_machines'] as $item1) {
                    $model->edgeMachines[$n1++] = edgeMachines::fromMap($item1);
                }
            }
        }

        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
