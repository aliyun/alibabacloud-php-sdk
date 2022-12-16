<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\filePropertyContent;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;
use AlibabaCloud\Tea\Model;

class committedFile extends Model
{
    /**
     * @example UPDATE
     *
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 7384234****
     *
     * @var string
     */
    public $committor;

    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
     * @example hello_dataworks.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @var filePropertyContent
     */
    public $filePropertyContent;

    /**
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @var nodeConfiguration
     */
    public $nodeConfiguration;

    /**
     * @example 421429
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'changeType'          => 'ChangeType',
        'comment'             => 'Comment',
        'committor'           => 'Committor',
        'content'             => 'Content',
        'fileId'              => 'FileId',
        'fileName'            => 'FileName',
        'filePropertyContent' => 'FilePropertyContent',
        'fileType'            => 'FileType',
        'nodeConfiguration'   => 'NodeConfiguration',
        'nodeId'              => 'NodeId',
        'useType'             => 'UseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->committor) {
            $res['Committor'] = $this->committor;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePropertyContent) {
            $res['FilePropertyContent'] = null !== $this->filePropertyContent ? $this->filePropertyContent->toMap() : null;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->nodeConfiguration) {
            $res['NodeConfiguration'] = null !== $this->nodeConfiguration ? $this->nodeConfiguration->toMap() : null;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return committedFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Committor'])) {
            $model->committor = $map['Committor'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePropertyContent'])) {
            $model->filePropertyContent = filePropertyContent::fromMap($map['FilePropertyContent']);
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['NodeConfiguration'])) {
            $model->nodeConfiguration = nodeConfiguration::fromMap($map['NodeConfiguration']);
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
