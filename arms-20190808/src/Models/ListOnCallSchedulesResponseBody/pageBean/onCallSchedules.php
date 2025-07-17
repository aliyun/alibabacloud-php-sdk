<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class onCallSchedules extends Model
{
    /**
     * @description The description of the scheduling policy.
     *
     * @example Test scheduling policy
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the scheduling policy.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the scheduling policy.
     *
     * @example OnCallSchedule_test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onCallSchedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
