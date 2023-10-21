<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\filter\filters;
use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The conditions that are used to filter logs imported from Log Service.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The relationship between multiple filter conditions. Valid values:
     *
     *   and (default value): Logs are processed only if all filter conditions are met.
     *   or: Logs are processed if one of the filter conditions is met.
     *
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
