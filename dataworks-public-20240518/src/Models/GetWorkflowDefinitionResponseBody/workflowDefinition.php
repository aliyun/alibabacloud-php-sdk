<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponseBody;

use AlibabaCloud\Tea\Model;

class workflowDefinition extends Model
{
    /**
     * @description The time when the workflow was created. This value is a UNIX timestamp.
     *
     * @example 1708481905000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the workflow.
     *
     * @example 463497880880954XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the workflow was last modified. This value is a UNIX timestamp.
     *
     * @example 1708481905000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the workflow.
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the workflow.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the workflow belongs.
     *
     * @example 307XXX
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the workflow. For more information, see [FlowSpec](https://github.com/aliyun/alibabacloud-dataworks-tool-dflow/).
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id'         => 'Id',
        'modifyTime' => 'ModifyTime',
        'name'       => 'Name',
        'owner'      => 'Owner',
        'projectId'  => 'ProjectId',
        'spec'       => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
     * @return workflowDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
