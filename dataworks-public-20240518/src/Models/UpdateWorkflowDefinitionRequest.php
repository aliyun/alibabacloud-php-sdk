<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkflowDefinitionRequest extends Model
{
    /**
     * @description The ID of the workflow.
     *
     * This parameter is required.
     * @example 652567824470354XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the workflow. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * This parameter is required.
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
     * @return UpdateWorkflowDefinitionRequest
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
