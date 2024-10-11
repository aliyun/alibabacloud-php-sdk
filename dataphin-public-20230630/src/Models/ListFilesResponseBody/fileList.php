<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesResponseBody;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example tempCode
     *
     * @var string
     */
    public $category;

    /**
     * @example select 1;
     *
     * @var string
     */
    public $content;

    /**
     * @example 1212111
     *
     * @var string
     */
    public $creator;

    /**
     * @example /xx/x
     *
     * @var string
     */
    public $directory;

    /**
     * @example directory
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 1717483193830
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1717483193830
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 111231112
     *
     * @var int
     */
    public $id;

    /**
     * @example 1212111
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $name;

    /**
     * @example 312112121
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'category'     => 'Category',
        'content'      => 'Content',
        'creator'      => 'Creator',
        'directory'    => 'Directory',
        'fileType'     => 'FileType',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'lastModifier' => 'LastModifier',
        'name'         => 'Name',
        'projectId'    => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
