<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeRequest extends Model
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
     * @example 10000
     *
     * @var string
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'id'        => 'Id',
        'projectId' => 'ProjectId',
        'spec'      => 'Spec',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
