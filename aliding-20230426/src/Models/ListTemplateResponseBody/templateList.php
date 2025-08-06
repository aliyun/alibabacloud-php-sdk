<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'coverUrl' => 'CoverUrl',
        'createTime' => 'CreateTime',
        'docType' => 'DocType',
        'id' => 'Id',
        'templateType' => 'TemplateType',
        'title' => 'Title',
        'updateTime' => 'UpdateTime',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
