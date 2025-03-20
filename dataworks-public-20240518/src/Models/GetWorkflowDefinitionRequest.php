<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetWorkflowDefinitionRequest extends Model
{
    /**
     * @description The ID of the workflow.
     *
     * This parameter is required.
     *
     * @example 860438872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description 查询结果是否包含工作流内部节点的脚本内容（对于内容较多的节点，可能存在较长的网络传输延时）。
     *
     * @example false
     *
     * @var bool
     */
    public $includeScriptContent;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'id' => 'Id',
        'includeScriptContent' => 'IncludeScriptContent',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->includeScriptContent) {
            $res['IncludeScriptContent'] = $this->includeScriptContent;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkflowDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncludeScriptContent'])) {
            $model->includeScriptContent = $map['IncludeScriptContent'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
