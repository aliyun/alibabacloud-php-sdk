<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractContentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $content;

    /**
     * @example R6XMn59e
     *
     * @var string
     */
    public $contentId;

    /**
     * @example newFile
     *
     * @var string
     */
    public $contentName;

    /**
     * @example 1564024964404
     *
     * @var string
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDirectory;

    /**
     * @example R38DYDop
     *
     * @var string
     */
    public $parentContentId;

    /**
     * @example bDXK1b8Z
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1564024964404
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'content'         => 'Content',
        'contentId'       => 'ContentId',
        'contentName'     => 'ContentName',
        'createTime'      => 'CreateTime',
        'isDirectory'     => 'IsDirectory',
        'parentContentId' => 'ParentContentId',
        'projectId'       => 'ProjectId',
        'updateTime'      => 'UpdateTime',
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
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isDirectory) {
            $res['IsDirectory'] = $this->isDirectory;
        }
        if (null !== $this->parentContentId) {
            $res['ParentContentId'] = $this->parentContentId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsDirectory'])) {
            $model->isDirectory = $map['IsDirectory'];
        }
        if (isset($map['ParentContentId'])) {
            $model->parentContentId = $map['ParentContentId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
