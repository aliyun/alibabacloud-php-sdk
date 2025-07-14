<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeNodes;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The command output.
     *
     * If ContentEncoding is set to PlainText in the request, the original command output is returned. If ContentEncoding is set to Base64 in the request, the Base64-encoded command output is returned.
     *
     * @example Base64
     *
     * @var string
     */
    public $content;

    /**
     * @description The content type of the file.
     *
     * PlainText: The file content is not encoded. Base64: The file content is encoded in Base64. Default value: PlainText.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The time when the file sending task was created.
     *
     * @example 2023-04-10T10:53:46.156+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The command description.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The user group of the file.
     *
     * @example root
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description The permissions on the file.
     *
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file.
     *
     * @example root
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description The overall sending status of the file. The overall sending status of the file varies based on the sending status of the file on all destination instances. Valid values:
     *
     *   Pending: The file is being verified or sent. If the sending state of the file on at least one instance is Pending, the overall sending state of the file is Pending.
     *
     *   Running: The file is being sent to the instance. If the sending state of the file on at least one instance is Running, the overall sending state of the file is Running.
     *
     *   Success: If the sending state of the file on all instances is Success, the overall sending state of the file is Success.
     *
     *   Failed: If the sending state of the file on all instances is Failed, the overall sending state of the file is Failed. If the sending state of the file on one or more instances is one of the following values, the overall sending state of the file is Failed:
     *
     *   Invalid: The file is invalid.
     *   Aborted: The file failed to be sent to the instances.
     *   Failed: The file failed to be created on the instances.
     *   Timeout: The file sending task timed out.
     *   Error: An error occurred and interrupted the file sending task.
     *
     *   PartialFailed: The file sending task was completed on some instances but failed on other instances. If the sending state of the file is Success on some instances and is Failed on other instances, the overall sending state of the file is PartialFailed.
     *
     * @example Pending
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The file sending records.
     *
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @description The name of the file sending task.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Indicates whether a file was overwritten in the destination directory if the file has the same name as the sent file.
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The destination directory.
     *
     * @example /home/user
     *
     * @var string
     */
    public $targetDir;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'fileGroup' => 'FileGroup',
        'fileMode' => 'FileMode',
        'fileOwner' => 'FileOwner',
        'invocationStatus' => 'InvocationStatus',
        'invokeNodes' => 'InvokeNodes',
        'name' => 'Name',
        'nodeCount' => 'NodeCount',
        'overwrite' => 'Overwrite',
        'targetDir' => 'TargetDir',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeNodes) {
            $res['InvokeNodes'] = null !== $this->invokeNodes ? $this->invokeNodes->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeNodes'])) {
            $model->invokeNodes = invokeNodes::fromMap($map['InvokeNodes']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }

        return $model;
    }
}
