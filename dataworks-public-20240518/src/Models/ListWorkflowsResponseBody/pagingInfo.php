<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo\workflows;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var workflows[]
     */
    public $workflows;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'workflows'  => 'Workflows',
    ];

    public function validate()
    {
        if (\is_array($this->workflows)) {
            Model::validateArray($this->workflows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workflows) {
            if (\is_array($this->workflows)) {
                $res['Workflows'] = [];
                $n1               = 0;
                foreach ($this->workflows as $item1) {
                    $res['Workflows'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Workflows'])) {
            if (!empty($map['Workflows'])) {
                $model->workflows = [];
                $n1               = 0;
                foreach ($map['Workflows'] as $item1) {
                    $model->workflows[$n1++] = workflows::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
