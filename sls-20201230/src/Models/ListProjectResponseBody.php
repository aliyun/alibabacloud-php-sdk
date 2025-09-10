<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

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
        'count' => 'count',
        'projects' => 'projects',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['projects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['projects'])) {
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['projects'] as $item1) {
                    $model->projects[$n1] = Project::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
