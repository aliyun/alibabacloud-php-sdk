<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class SendFileRequest extends Model
{
    /**
     * @description The content of the file. The file must not exceed 32 KB in size after it is encoded in Base64.
     *
     *   If `ContentType` is set to `PlainText`, the value of Content is in plaintext.
     *   If `ContentType` is set to `Base64`, the value of Content is Base64-encoded.
     *
     * This parameter is required.
     *
     * @example #!/bin/bash echo "Current User is :" echo $(ps | grep "$$" | awk \\"{print $2}\\") -------- oss://bucketName/objectName
     *
     * @var string
     */
    public $content;

    /**
     * @description The content type of the file. Valid values:
     *
     * PlainText Base64 Default value: PlainText.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The description of the file. The description can be up to 512 characters in length and can contain any characters.
     *
     * @example This is a test file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The user group of the file. This parameter takes effect only on Linux instances. Default value: root. The value can be up to 64 characters in length.
     *
     * Note If you want to use a non-root user group, make sure that the user group exists in the instances.
     *
     * @example test
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description The permissions on the file. This parameter takes effect only on Linux instances. You can configure this parameter in the same way as you configure the chmod command.
     *
     * Default value: 0644: the owner of the file has the read and write permission. The user group of the file and other users have read-only permission.
     *
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file. This parameter takes effect only on Linux instances. Default value: root.
     *
     * @example root
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description The file name. The name can be up to 255 characters in length and can contain any characters.
     *
     * This parameter is required.
     *
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description The node list.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $nodeIdList;

    /**
     * @description Specifies whether to overwrite file with the same name in the destination directory.
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example True
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The directory in the Lingjun node to which the file is sent. If the specified directory does not exist, the system creates the directory automatically.
     *
     * This parameter is required.
     *
     * @example /home
     *
     * @var string
     */
    public $targetDir;

    /**
     * @description The timeout period for the file sending task. Unit: seconds.
     *
     *   A timeout error occurs when a file cannot be sent because the process slows down or because a specific module or Cloud Assistant Agent does not exist.
     *   If the specified timeout period is less than 10 seconds, the system sets the timeout period to 10 seconds to ensure that the file can be sent.
     *
     * Default value: 60.
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
