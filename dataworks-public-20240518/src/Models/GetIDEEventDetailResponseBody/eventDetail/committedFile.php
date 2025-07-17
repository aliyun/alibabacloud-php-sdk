<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\filePropertyContent;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;
use AlibabaCloud\Tea\Model;

class committedFile extends Model
{
    /**
     * @description The type of the change to the file of the current version. Valid values: CREATE, UPDATE, and DELETE.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $changeType;

    /**
     * @description The description of the file version.
     *
     * @example Second version submission
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the Alibaba Cloud account that is used to generate the file of the current version.
     *
     * @example 7384234****
     *
     * @var string
     */
    public $committor;

    /**
     * @description The code in the file of the current version.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The file ID.
     *
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example hello_dataworks.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The details of the file.
     *
     * @var filePropertyContent
     */
    public $filePropertyContent;

    /**
     * @description The file type. The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html).
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description The scheduling properties of the node that corresponds to the file.
     *
     * @var nodeConfiguration
     */
    public $nodeConfiguration;

    /**
     * @description The ID of the node that is scheduled.
     *
     * @example 421429
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The module to which the file belongs. Valid values:
     *
     *   NORMAL: The file is used for DataStudio.
     *   MANUAL: The file is used for a manually triggered node.
     *   MANUAL_BIZ: The file is used for a manually triggered workflow.
     *   SKIP: The file is used for a dry-run node in DataStudio.
     *   ADHOCQUERY: The file is used for an ad hoc query.
     *   COMPONENT: The file is used for a script template.
     *
     * @example NORMAL
     *
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

    public function validate() {}

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
