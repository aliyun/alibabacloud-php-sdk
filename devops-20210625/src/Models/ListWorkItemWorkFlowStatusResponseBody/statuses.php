<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusResponseBody;

use AlibabaCloud\Tea\Model;

class statuses extends Model
{
    /**
     * @example 用户阿里云pk，例如19xxxx31947xxxx
     *
     * @var string
     */
    public $creator;

    /**
     * @example 该状态的具体信息
     *
     * @var string
     */
    public $description;

    /**
     * @example 1620455467000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1641870287000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example dfexxxxxf4fee18xxxxx36
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 用户阿里云pk，例如19xxxx31947xxxx
     *
     * @var string
     */
    public $modifier;

    /**
     * @example 例：待处理
     *
     * @var string
     */
    public $name;

    /**
     * @example Workitem
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example system
     *
     * @var string
     */
    public $source;

    /**
     * @example 例如：1
     *
     * @var string
     */
    public $workflowStageIdentifier;

    /**
     * @example 例：确认阶段
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
