<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class SendFileRequest extends Model
{
    /**
     * @description The content of the file. After Base64 encoding, the size cannot exceed 32 KB.
     *
     * - When the `ContentType` parameter is `PlainText`, this field is plain text.
     * - When the `ContentType` parameter is `Base64`, this field is Base64 encoded text.
     *
     * This parameter is required.
     *
     * @example #!/bin/bash echo "Current User is :" echo $(ps | grep "$$" | awk \\"{print $2}\\") -------- oss://bucketName/objectName
     *
     * @var string
     */
    public $content;

    /**
     * @description The content type of the file.
     *
     * PlainText: Plain text.
     * Base64: Base64 encoded.
     * The default value is PlainText.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description Description information. Supports all character sets, and the length must not exceed 512 characters.
     *
     * @example This is a test file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The group of the file. Applies only to Linux instances, and the default is root. The length must not exceed 64 characters.
     *
     * Note
     * When using other groups, ensure that the group exists in the instance.
     *
     * @example test
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description The permissions of the file. Applies only to Linux instances, and the setting method is the same as the chmod command.
     *
     * The default value is 0644, which means the user has read and write permissions, while the group and other users have read-only permissions.
     *
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file. Applies only to Linux instances, and the default is root.
     *
     * @example root
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description The name of the file. Supports all character sets, and the length must not exceed 255 characters.
     *
     * This parameter is required.
     *
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description List of nodes.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $nodeIdList;

    /**
     * @description Whether to overwrite the file if a file with the same name already exists in the target directory.
     * - true: Overwrite.
     * - false: Do not overwrite.
     *
     * The default value is false.
     *
     * @example True
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The directory in the target Lingjun node where the file will be sent. If it does not exist, it will be automatically created.
     *
     * This parameter is required.
     *
     * @example /home
     *
     * @var string
     */
    public $targetDir;

    /**
     * @description The timeout for sending the file. Unit: seconds.
     *
     * - A timeout may occur due to process reasons, missing modules, or missing Cloud Assistant Agent.
     * - If the set timeout is less than 10 seconds, to ensure successful delivery, the system will automatically set the timeout to 10 seconds.
     *
     * The default value is 60.
     *
     * @example 600
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'description' => 'Description',
        'fileGroup' => 'FileGroup',
        'fileMode' => 'FileMode',
        'fileOwner' => 'FileOwner',
        'name' => 'Name',
        'nodeIdList' => 'NodeIdList',
        'overwrite' => 'Overwrite',
        'targetDir' => 'TargetDir',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileGroup) {
            $res['FileGroup'] = $this->fileGroup;
        }
        if (null !== $this->fileMode) {
            $res['FileMode'] = $this->fileMode;
        }
        if (null !== $this->fileOwner) {
            $res['FileOwner'] = $this->fileOwner;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = $this->nodeIdList;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileGroup'])) {
            $model->fileGroup = $map['FileGroup'];
        }
        if (isset($map['FileMode'])) {
            $model->fileMode = $map['FileMode'];
        }
        if (isset($map['FileOwner'])) {
            $model->fileOwner = $map['FileOwner'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = $map['NodeIdList'];
            }
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
