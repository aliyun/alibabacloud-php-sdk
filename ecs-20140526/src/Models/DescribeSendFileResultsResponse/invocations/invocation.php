<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponse\invocations;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponse\invocations\invocation\invokeInstances;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $targetDir;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileOwner;

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
    public $overwrite;

    /**
     * @var int
     */
    public $vmCount;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var invokeInstances
     */
    public $invokeInstances;
    protected $_name = [
        'invokeId'         => 'InvokeId',
        'name'             => 'Name',
        'description'      => 'Description',
        'targetDir'        => 'TargetDir',
        'contentType'      => 'ContentType',
        'content'          => 'Content',
        'fileOwner'        => 'FileOwner',
        'fileGroup'        => 'FileGroup',
        'fileMode'         => 'FileMode',
        'overwrite'        => 'Overwrite',
        'vmCount'          => 'VmCount',
        'creationTime'     => 'CreationTime',
        'invocationStatus' => 'InvocationStatus',
        'invokeInstances'  => 'InvokeInstances',
    ];

    public function validate()
    {
        Model::validateRequired('invokeId', $this->invokeId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('targetDir', $this->targetDir, true);
        Model::validateRequired('contentType', $this->contentType, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('fileOwner', $this->fileOwner, true);
        Model::validateRequired('fileGroup', $this->fileGroup, true);
        Model::validateRequired('fileMode', $this->fileMode, true);
        Model::validateRequired('overwrite', $this->overwrite, true);
        Model::validateRequired('vmCount', $this->vmCount, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('invocationStatus', $this->invocationStatus, true);
        Model::validateRequired('invokeInstances', $this->invokeInstances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileOwner) {
            $res['FileOwner'] = $this->fileOwner;
        }
        if (null !== $this->fileGroup) {
            $res['FileGroup'] = $this->fileGroup;
        }
        if (null !== $this->fileMode) {
            $res['FileMode'] = $this->fileMode;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->vmCount) {
            $res['VmCount'] = $this->vmCount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
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
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileOwner'])) {
            $model->fileOwner = $map['FileOwner'];
        }
        if (isset($map['FileGroup'])) {
            $model->fileGroup = $map['FileGroup'];
        }
        if (isset($map['FileMode'])) {
            $model->fileMode = $map['FileMode'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['VmCount'])) {
            $model->vmCount = $map['VmCount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }

        return $model;
    }
}
