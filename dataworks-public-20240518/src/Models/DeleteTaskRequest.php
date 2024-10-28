<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'id'         => 'Id',
        'projectEnv' => 'ProjectEnv',
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
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
