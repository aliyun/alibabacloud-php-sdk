<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\subProjectInfo\buildDetail;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\subProjectInfo\dataset;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\subProjectInfo\source;
use AlibabaCloud\Tea\Model;

class subProjectInfo extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var string
     */
    public $bizUsage;

    /**
     * @var buildDetail
     */
    public $buildDetail;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customSource;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $dependencies;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $materialCoverUrl;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'auditStatus'      => 'AuditStatus',
        'autoBuild'        => 'AutoBuild',
        'bizUsage'         => 'BizUsage',
        'buildDetail'      => 'BuildDetail',
        'checkStatus'      => 'CheckStatus',
        'createMode'       => 'CreateMode',
        'createTime'       => 'CreateTime',
        'customSource'     => 'CustomSource',
        'dataset'          => 'Dataset',
        'deleted'          => 'Deleted',
        'dependencies'     => 'Dependencies',
        'ext'              => 'Ext',
        'id'               => 'Id',
        'intro'            => 'Intro',
        'materialCoverUrl' => 'MaterialCoverUrl',
        'modifiedTime'     => 'ModifiedTime',
        'source'           => 'Source',
        'status'           => 'Status',
        'title'            => 'Title',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }
        if (null !== $this->buildDetail) {
            $res['BuildDetail'] = null !== $this->buildDetail ? $this->buildDetail->toMap() : null;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customSource) {
            $res['CustomSource'] = $this->customSource;
        }
        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toMap() : null;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->dependencies) {
            $res['Dependencies'] = $this->dependencies;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->materialCoverUrl) {
            $res['MaterialCoverUrl'] = $this->materialCoverUrl;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProjectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
        }
        if (isset($map['BuildDetail'])) {
            $model->buildDetail = buildDetail::fromMap($map['BuildDetail']);
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomSource'])) {
            $model->customSource = $map['CustomSource'];
        }
        if (isset($map['Dataset'])) {
            $model->dataset = dataset::fromMap($map['Dataset']);
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Dependencies'])) {
            $model->dependencies = $map['Dependencies'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['MaterialCoverUrl'])) {
            $model->materialCoverUrl = $map['MaterialCoverUrl'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
