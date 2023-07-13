<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\SLSProcessConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\SLSProcessConfig\filter\filters;
use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The extended field that indicates the result of basic operations that are performed on aggregation results.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The ID of the member account.
     *
     * >  This parameter is required only if you call this operation to delete metric import tasks that belong to a member in a resource directory. In this case, the `TaskType` parameter is set to `aliyun_fc`.
     * @example and
     *
     * @var string
     */
    public $relation;
    protected $_name = [
        'filters'  => 'Filters',
        'relation' => 'Relation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        return $model;
    }
}
