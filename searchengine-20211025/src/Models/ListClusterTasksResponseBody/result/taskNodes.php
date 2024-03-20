<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class taskNodes extends Model
{
    /**
     * @description The date when the task was completed.
     *
     * @example " "
     *
     * @var string
     */
    public $finishDate;

    /**
     * @description The sequence number of the task.
     *
     * @example 100
     *
     * @var int
     */
    public $index;

    /**
     * @description The name of the task.
     *
     * @example general
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the task.
     *
     * @example 2
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'finishDate' => 'finishDate',
        'index'      => 'index',
        'name'       => 'name',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishDate) {
            $res['finishDate'] = $this->finishDate;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finishDate'])) {
            $model->finishDate = $map['finishDate'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
