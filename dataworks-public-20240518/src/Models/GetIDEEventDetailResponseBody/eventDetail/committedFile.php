<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\filePropertyContent;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;

class committedFile extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $committor;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var filePropertyContent
     */
    public $filePropertyContent;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var nodeConfiguration
     */
    public $nodeConfiguration;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'changeType' => 'ChangeType',
        'comment' => 'Comment',
        'committor' => 'Committor',
        'content' => 'Content',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'filePropertyContent' => 'FilePropertyContent',
        'fileType' => 'FileType',
        'nodeConfiguration' => 'NodeConfiguration',
        'nodeId' => 'NodeId',
        'useType' => 'UseType',
    ];

    public function validate()
    {
        if (null !== $this->filePropertyContent) {
            $this->filePropertyContent->validate();
        }
        if (null !== $this->nodeConfiguration) {
            $this->nodeConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['FilePropertyContent'] = null !== $this->filePropertyContent ? $this->filePropertyContent->toArray($noStream) : $this->filePropertyContent;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->nodeConfiguration) {
            $res['NodeConfiguration'] = null !== $this->nodeConfiguration ? $this->nodeConfiguration->toArray($noStream) : $this->nodeConfiguration;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
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
