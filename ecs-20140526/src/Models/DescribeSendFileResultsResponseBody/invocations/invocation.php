<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\tags;

class invocation extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentType;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $fileGroup;
    /**
     * @var string
     */
    public $fileMode;
    /**
     * @var string
     */
    public $fileOwner;
    /**
     * @var string
     */
    public $invocationStatus;
    /**
     * @var string
     */
    public $invokeId;
    /**
     * @var invokeInstances
     */
    public $invokeInstances;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $overwrite;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $targetDir;
    /**
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
        if (null !== $this->invokeInstances) {
            $this->invokeInstances->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toArray($noStream) : $this->invokeInstances;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }

        if (null !== $this->vmCount) {
            $res['VmCount'] = $this->vmCount;
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
