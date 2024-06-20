<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainContractContentRequest extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example newFile
     *
     * @var string
     */
    public $contentName;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example bDXK1b8Z
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'content'         => 'Content',
        'contentName'     => 'ContentName',
        'isDirectory'     => 'IsDirectory',
        'parentContentId' => 'ParentContentId',
        'projectId'       => 'ProjectId',
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
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntChainContractContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
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

        return $model;
    }
}
