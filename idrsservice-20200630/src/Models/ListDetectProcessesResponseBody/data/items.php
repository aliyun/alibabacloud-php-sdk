<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectProcessesResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example 2020-12-04T14:48:59.000+08:00
     *
     * @var string
     */
    public $contentAt;

    /**
     * @example 2020-12-04T14:47:59.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example {}
     *
     * @var string
     */
    public $draft;

    /**
     * @example 2020-12-04T14:48:59.000+08:00
     *
     * @var string
     */
    public $draftAt;

    /**
     * @example http://abc.com/123.json
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description ID
     *
     * @example 0f1c45cd-3eee-4e60-b505-2e330b8755d3
     *
     * @var string
     */
    public $id;

    /**
     * @example 987d563d38f5aef27feca8702c689bb1
     *
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $newVersion;

    /**
     * @example True
     *
     * @var bool
     */
    public $published;

    /**
     * @example REMOTE
     *
     * @var string
     */
    public $type;

    /**
     * @example 2020-12-04T14:48:59.000+08:00
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'content'    => 'Content',
        'contentAt'  => 'ContentAt',
        'createdAt'  => 'CreatedAt',
        'draft'      => 'Draft',
        'draftAt'    => 'DraftAt',
        'fileUrl'    => 'FileUrl',
        'id'         => 'Id',
        'md5'        => 'Md5',
        'name'       => 'Name',
        'newVersion' => 'NewVersion',
        'published'  => 'Published',
        'type'       => 'Type',
        'updatedAt'  => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentAt) {
            $res['ContentAt'] = $this->contentAt;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
        if (null !== $this->draftAt) {
            $res['DraftAt'] = $this->draftAt;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newVersion) {
            $res['NewVersion'] = $this->newVersion;
        }
        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentAt'])) {
            $model->contentAt = $map['ContentAt'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['DraftAt'])) {
            $model->draftAt = $map['DraftAt'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewVersion'])) {
            $model->newVersion = $map['NewVersion'];
        }
        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
