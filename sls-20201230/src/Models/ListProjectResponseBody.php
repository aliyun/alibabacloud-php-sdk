<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListProjectResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var Project[]
     */
    public $projects;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count'    => 'count',
        'projects' => 'projects',
        'total'    => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->projects) {
            $res['projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['projects'])) {
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? Project::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
