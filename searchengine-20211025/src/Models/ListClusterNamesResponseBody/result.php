<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterNamesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The description of the cluster.
     *
     * @example ha3_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The cluster ID.
     *
     * @example 25030
     *
     * @var int
     */
    public $id;

    /**
     * @description The cluster name.
     *
     * @example my_index
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'description',
        'id'          => 'id',
        'name'        => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
