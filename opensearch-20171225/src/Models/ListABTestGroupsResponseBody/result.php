<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the test group was created.
     *
     * @example 1588839490
     *
     * @var int
     */
    public $created;

    /**
     * @description The ID of the test group.
     *
     * @example 13466
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the test group.
     *
     * @example Group_2020-5-7_15:23:3
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the test group. Valid values:
     *
     *   0: not in effect
     *   1: in effect
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the test group was last modified.
     *
     * @example 1588839490
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'created' => 'created',
        'id'      => 'id',
        'name'    => 'name',
        'status'  => 'status',
        'updated' => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
