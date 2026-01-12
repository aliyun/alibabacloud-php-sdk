<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\buildDetail;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\dataset;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\source;

class data extends Model
{
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
    public $createMode;

    /**
     * @var string
     */
    public $createTime;

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
        'bizUsage' => 'BizUsage',
        'buildDetail' => 'BuildDetail',
        'createMode' => 'CreateMode',
        'createTime' => 'CreateTime',
        'dataset' => 'Dataset',
        'deleted' => 'Deleted',
        'dependencies' => 'Dependencies',
        'ext' => 'Ext',
        'id' => 'Id',
        'intro' => 'Intro',
        'materialCoverUrl' => 'MaterialCoverUrl',
        'modifiedTime' => 'ModifiedTime',
        'source' => 'Source',
        'status' => 'Status',
        'title' => 'Title',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->buildDetail) {
            $this->buildDetail->validate();
        }
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }

        if (null !== $this->buildDetail) {
            $res['BuildDetail'] = null !== $this->buildDetail ? $this->buildDetail->toArray($noStream) : $this->buildDetail;
        }

        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
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
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
        }

        if (isset($map['BuildDetail'])) {
            $model->buildDetail = buildDetail::fromMap($map['BuildDetail']);
        }

        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
