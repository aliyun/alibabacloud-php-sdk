<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 652567824470354XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example root/demo
     *
     * @var string
     */
    public $path;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'id'        => 'Id',
        'path'      => 'Path',
        'projectId' => 'ProjectId',
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
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
