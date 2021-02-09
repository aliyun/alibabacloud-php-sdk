<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsResponseBody\jobs;
use AlibabaCloud\Tea\Model;

class DescribeWorkflowsResponseBody extends Model
{
    /**
     * @description job信息
     *
     * @var jobs[]
     */
    public $jobs;
    protected $_name = [
        'jobs' => 'jobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobs'])) {
            if (!empty($map['jobs'])) {
                $model->jobs = [];
                $n           = 0;
                foreach ($map['jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
