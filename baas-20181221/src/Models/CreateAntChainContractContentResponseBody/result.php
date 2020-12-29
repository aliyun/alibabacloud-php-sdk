<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainContractContentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $contentName;

    /**
     * @var string
     */
    public $parentContentId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $isDirectory;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentId;
    protected $_name = [
        'contentName'     => 'ContentName',
        'parentContentId' => 'ParentContentId',
        'updateTime'      => 'UpdateTime',
        'createTime'      => 'CreateTime',
        'projectId'       => 'ProjectId',
        'isDirectory'     => 'IsDirectory',
        'content'         => 'Content',
        'contentId'       => 'ContentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->parentContentId) {
            $res['ParentContentId'] = $this->parentContentId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->isDirectory) {
            $res['IsDirectory'] = $this->isDirectory;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
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
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['ParentContentId'])) {
            $model->parentContentId = $map['ParentContentId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsDirectory'])) {
            $model->isDirectory = $map['IsDirectory'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }

        return $model;
    }
}
