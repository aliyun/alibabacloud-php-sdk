<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeRequest extends Model
{
    /**
     * @example a7ef0634-20ec-4a7c-a214-54020f91XXXX
     *
     * @var string
     */
    public $containerId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example DATAWORKS_PROJECT
     *
     * @var string
     */
    public $scene;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'containerId' => 'ContainerId',
        'projectId'   => 'ProjectId',
        'scene'       => 'Scene',
        'spec'        => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
