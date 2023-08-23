<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @var projects[]
     */
    public $projects;
    protected $_name = [
        'nextToken' => 'NextToken',
        'marker'    => 'marker',
        'maxItem'   => 'maxItem',
        'projects'  => 'projects',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n               = 0;
                foreach ($map['projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
