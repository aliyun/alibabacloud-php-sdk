<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @example URL
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 1596506100000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example WORKBOOK
     *
     * @var string
     */
    public $docType;

    /**
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @example user_template
     *
     * @var string
     */
    public $templateType;

    /**
     * @example title
     *
     * @var string
     */
    public $title;

    /**
     * @example 1596506100000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example workspaceId
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'coverUrl'     => 'CoverUrl',
        'createTime'   => 'CreateTime',
        'docType'      => 'DocType',
        'id'           => 'Id',
        'templateType' => 'TemplateType',
        'title'        => 'Title',
        'updateTime'   => 'UpdateTime',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return templateList
     */
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
