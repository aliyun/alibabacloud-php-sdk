<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestSceneResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the test scenario was created.
     *
     * @example 1596527691
     *
     * @var int
     */
    public $created;

    /**
     * @description The ID of the test scenario.
     *
     * @example 20614
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the test scenario.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the test scenario. Valid values:
     *
     *   0: not in effect
     *   1: in effect
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the test scenario was last modified.
     *
     * @example 1596527691
     *
     * @var int
     */
    public $updated;

    /**
     * @description The tag of the test scenario.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'created' => 'created',
        'id'      => 'id',
        'name'    => 'name',
        'status'  => 'status',
        'updated' => 'updated',
        'values'  => 'values',
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
        if (null !== $this->values) {
            $res['values'] = $this->values;
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
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}
