<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody\workflow;

use AlibabaCloud\Tea\Model;

class statuses extends Model
{
    /**
     * @description 创建人
     *
     * @var string
     */
    public $creator;

    /**
     * @description 描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 状态唯一标识
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 状态名
     *
     * @var string
     */
    public $name;

    /**
     * @description 资源来源
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 状态来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 阶段信息-阶段的唯一标识
     *
     * @var string
     */
    public $workflowStageIdentifier;

    /**
     * @description 阶段信息-名称
     *
     * @var string
     */
    public $workflowStageName;
    protected $_name = [
        'creator'                 => 'creator',
        'description'             => 'description',
        'gmtCreate'               => 'gmtCreate',
        'gmtModified'             => 'gmtModified',
        'identifier'              => 'identifier',
        'modifier'                => 'modifier',
        'name'                    => 'name',
        'resourceType'            => 'resourceType',
        'source'                  => 'source',
        'workflowStageIdentifier' => 'workflowStageIdentifier',
        'workflowStageName'       => 'workflowStageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->workflowStageIdentifier) {
            $res['workflowStageIdentifier'] = $this->workflowStageIdentifier;
        }
        if (null !== $this->workflowStageName) {
            $res['workflowStageName'] = $this->workflowStageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['workflowStageIdentifier'])) {
            $model->workflowStageIdentifier = $map['workflowStageIdentifier'];
        }
        if (isset($map['workflowStageName'])) {
            $model->workflowStageName = $map['workflowStageName'];
        }

        return $model;
    }
}
