<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $clipsParam;
    /**
     * @var string
     */
    public $config;
    /**
     * @var string
     */
    public $coverURL;
    /**
     * @var string
     */
    public $createSource;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $modifiedSource;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $previewMedia;
    /**
     * @var string
     */
    public $previewMediaStatus;
    /**
     * @var string
     */
    public $relatedMediaids;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clipsParam'         => 'ClipsParam',
        'config'             => 'Config',
        'coverURL'           => 'CoverURL',
        'createSource'       => 'CreateSource',
        'creationTime'       => 'CreationTime',
        'modifiedSource'     => 'ModifiedSource',
        'modifiedTime'       => 'ModifiedTime',
        'name'               => 'Name',
        'previewMedia'       => 'PreviewMedia',
        'previewMediaStatus' => 'PreviewMediaStatus',
        'relatedMediaids'    => 'RelatedMediaids',
        'status'             => 'Status',
        'templateId'         => 'TemplateId',
        'type'               => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }

        if (null !== $this->previewMediaStatus) {
            $res['PreviewMediaStatus'] = $this->previewMediaStatus;
        }

        if (null !== $this->relatedMediaids) {
            $res['RelatedMediaids'] = $this->relatedMediaids;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }

        if (isset($map['PreviewMediaStatus'])) {
            $model->previewMediaStatus = $map['PreviewMediaStatus'];
        }

        if (isset($map['RelatedMediaids'])) {
            $model->relatedMediaids = $map['RelatedMediaids'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
