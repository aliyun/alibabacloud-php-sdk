<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\tags;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The content of the file.
     *
     * @example #!/bin/bash  echo "Current User is :"  echo $(ps | grep "$$" | awk \\"{print $2}\\")
     *
     * @var string
     */
    public $content;

    /**
     * @description The type of the file content. Valid values:
     *
     *   PlainText: The file content is not encoded.
     *   Base64: The file content is encoded in Base64.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The time when the file sending task was created.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the file.
     *
     * @example This is a test file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The group of the file.
     *
     * @example test
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description The permissions on the file.
     *
     * @example 777
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file.
     *
     * @example test
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description The overall sending status of the file. The overall sending status of the file varies based on the sending status of the file on all destination instances. Valid values:
     *
     *   Pending: The file is being verified or sent. If the sending state of the file on at least one instance is Pending, the overall sending state of the file is Pending.
     *
     *   Running: The file is being sent to the instances. If the sending state of the file on at least one instance is Running, the overall sending state of the file is Running.
     *
     *   Success: If the sending state of the file on all instances is Success, the overall sending state of the file is Success.
     *
     *   If the sending state of the file on all instances is Failed, the overall sending state of the file is Failed. If the sending state of the file on one or more instances is one of the following values, the overall sending state of the file is Failed:
     *
     *   Invalid: The file is invalid.
     *   Aborted: The file failed to be sent to the instances.
     *   Failed: The file failed to be created on the instances.
     *   Timeout: The file sending task timed out.
     *   Error: An error occurred and interrupted the file sending task.
     *
     *   PartialFailed: The file sending task was completed on some instances but failed on other instances. If the sending state of the file is Success on some instances and is Failed on other instances, the overall sending state of the file is PartialFailed.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The ID of the file sending task.
     *
     * @example f-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The destination instances.
     *
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @description The name of the file.
     *
     * @example test.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether a file in the destination directory is overwritten if the file has the same name as the sent file.
     *
     * @example false
     *
     * @var string
     */
    public $overwrite;

    /**
     * @description The tags of the file sending task.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The destination directory.
     *
     * @example /home/user
     *
     * @var string
     */
    public $targetDir;

    /**
     * @description The number of the destination instances.
     *
     * @example 1
     *
     * @var int
     */
    public $vmCount;
    protected $_name = [
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'fileGroup'        => 'FileGroup',
        'fileMode'         => 'FileMode',
        'fileOwner'        => 'FileOwner',
        'invocationStatus' => 'InvocationStatus',
        'invokeId'         => 'InvokeId',
        'invokeInstances'  => 'InvokeInstances',
        'name'             => 'Name',
        'overwrite'        => 'Overwrite',
        'tags'             => 'Tags',
        'targetDir'        => 'TargetDir',
        'vmCount'          => 'VmCount',
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
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }
        if (null !== $this->vmCount) {
            $res['VmCount'] = $this->vmCount;
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
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }
        if (isset($map['VmCount'])) {
            $model->vmCount = $map['VmCount'];
        }

        return $model;
    }
}
