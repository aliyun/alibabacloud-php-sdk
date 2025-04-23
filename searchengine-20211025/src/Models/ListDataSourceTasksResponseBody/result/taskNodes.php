<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody\result;

use AlibabaCloud\Dara\Model;

class taskNodes extends Model
{
    /**
     * @var string
     */
    public $finishDate;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'finishDate' => 'finishDate',
        'index' => 'index',
        'name' => 'name',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
