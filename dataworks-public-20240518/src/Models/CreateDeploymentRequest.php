<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentRequest extends Model
{
    /**
     * @description The description of the process.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of entities to which you want to apply the process.
     *
     * This parameter is required.
     * @var string[]
     */
    public $objectIds;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Specifies whether to deploy or undeploy the entity. Valid values:
     *
     *   Online: deploys the entity.
     *   Offline: undeploys the entity.
     *
     * This parameter is required.
     * @example Online
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'objectIds'   => 'ObjectIds',
        'projectId'   => 'ProjectId',
        'type'        => 'Type',
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
        if (null !== $this->objectIds) {
            $res['ObjectIds'] = $this->objectIds;
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
     * @return CreateDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ObjectIds'])) {
            if (!empty($map['ObjectIds'])) {
                $model->objectIds = $map['ObjectIds'];
            }
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
