<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example train1oug3yehan4-master-0
     *
     * @var string
     */
    public $name;

    /**
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name' => 'Name',
        'role' => 'Role',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
