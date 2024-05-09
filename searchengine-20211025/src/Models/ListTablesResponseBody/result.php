<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTablesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example IN_USE
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @example es_test_1b
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'indexStatus' => 'indexStatus',
        'name'        => 'name',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexStatus) {
            $res['indexStatus'] = $this->indexStatus;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexStatus'])) {
            $model->indexStatus = $map['indexStatus'];
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
