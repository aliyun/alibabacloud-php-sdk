<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description 模板ID
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 模板配置
     *
     * @var string
     */
    public $config;

    /**
     * @description 预览素材
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 创建来源
     *
     * @var string
     */
    public $createSource;

    /**
     * @description 修改来源
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @description 预览素材状态
     *
     * @var string
     */
    public $previewMediaStatus;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 封面URL
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description ClipsParam
     *
     * @var string
     */
    public $clipsParam;
    protected $_name = [
        'templateId'         => 'TemplateId',
        'name'               => 'Name',
        'type'               => 'Type',
        'config'             => 'Config',
        'previewMedia'       => 'PreviewMedia',
        'status'             => 'Status',
        'createSource'       => 'CreateSource',
        'modifiedSource'     => 'ModifiedSource',
        'previewMediaStatus' => 'PreviewMediaStatus',
        'creationTime'       => 'CreationTime',
        'modifiedTime'       => 'ModifiedTime',
        'coverURL'           => 'CoverURL',
        'clipsParam'         => 'ClipsParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->previewMediaStatus) {
            $res['PreviewMediaStatus'] = $this->previewMediaStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['PreviewMediaStatus'])) {
            $model->previewMediaStatus = $map['PreviewMediaStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }

        return $model;
    }
}
