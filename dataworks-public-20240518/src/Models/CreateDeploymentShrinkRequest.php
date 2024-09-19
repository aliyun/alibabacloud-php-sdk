<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $objectIdsShrink;

    /**
     * @description 项目Id
     *
     * This parameter is required.
     * @example 10000
     *
     * @var string
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example Online
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'     => 'Description',
        'objectIdsShrink' => 'ObjectIds',
        'projectId'       => 'ProjectId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->objectIdsShrink) {
            $res['ObjectIds'] = $this->objectIdsShrink;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeploymentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ObjectIds'])) {
            $model->objectIdsShrink = $map['ObjectIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
