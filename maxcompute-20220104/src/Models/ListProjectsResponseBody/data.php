<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItem;

    /**
     * @var projects[]
     */
    public $projects;
    protected $_name = [
        'nextToken' => 'NextToken',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'projects' => 'projects',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['projects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        if (isset($map['projects'])) {
            if (!empty($map['projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['projects'] as $item1) {
                    $model->projects[$n1++] = projects::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
