<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the task.
     *
     * @example 500
     *
     * @var string
     */
    public $id;

    /**
     * @description The status of the task.
     *
     *   PROCESSING: in progress
     *   FAIL: failed
     *   SUCCESS: successful
     *
     * @example PROCESSING
     *
     * @var string
     */
    public $incrementStatus;
    protected $_name = [
        'id'              => 'Id',
        'incrementStatus' => 'IncrementStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incrementStatus) {
            $res['IncrementStatus'] = $this->incrementStatus;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncrementStatus'])) {
            $model->incrementStatus = $map['IncrementStatus'];
        }

        return $model;
    }
}
