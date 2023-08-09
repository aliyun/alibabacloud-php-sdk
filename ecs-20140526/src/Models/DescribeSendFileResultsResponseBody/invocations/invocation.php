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
     * @example #!/bin/bash  echo "Current User is :"  echo $(ps | grep "$$" | awk \"{print $2}\")
     *
     * @var string
     */
    public $content;

    /**
     * @description The content type of the file. Valid values:
     *
     *   PlainText
     *   Base64
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
     * @description The user group of the file.
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
     * @description The overall sending state of the file. The overall sending state of the file depends on its sending state on all the destination instances. Valid values:
     *
     *   Pending: The file is being verified or sent.
     *   Invalid: The file is invalid.
     *   Running: The file is being sent to the instances.
     *   Aborted: The file failed to be sent to the instances. To send a file to an instance, make sure that the instance is in the Running state and the file can be sent within 1 minute.
     *   Success: The file is sent.
     *   Failed: The file failed to be created on the instances.
     *   Error: An error occurs and interrupts the file sending task.
     *   Timeout: The file sending task times out.
     *   Cancelled: The file sending task is canceled.
     *   Stopping: The file sending task is being stopped.
     *   Terminated: The file sending task is terminated.
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
     * @description The number of instances to which the file was sent.
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
