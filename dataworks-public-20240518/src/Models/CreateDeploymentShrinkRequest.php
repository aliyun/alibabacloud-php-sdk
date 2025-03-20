<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentShrinkRequest extends Model
{
    /**
     * @description The description of the process.
     *
     * @example This is a OdpsSQL-node publishing process. The function is XXXX.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of entities to which you want to apply the process.
     *
     * >  A process can be applied to only a single entity and its child entities. If you specify multiple entities in the array, the process is applied only to the first entity in the array and its child entities. Make sure that the array in your request contains only one element. Extra elements will be ignored.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $objectIdsShrink;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * This parameter is required.
     *
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
     *
     * @example Online
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'objectIdsShrink' => 'ObjectIds',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate() {}

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
